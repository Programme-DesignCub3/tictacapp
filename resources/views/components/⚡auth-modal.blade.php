<?php

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Locked]
    public $isLoginForm = false;

    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function login(): void
    {
        $baseRule = [
            'password' => ['required', 'string', Rules\Password::defaults()],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:190'],
        ];

        $this->validate($baseRule);

        $this->ensureIsNotRateLimited();

        $user = $this->validateCredentials();

        Auth::login($user, $this->remember ?? false);

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        redirect()->intended(route('home', absolute: false));
    }

    public function register(): void
    {
        $baseRule = [
            'name' => ['required', 'string', 'max:190'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:190', 'unique:'.User::class],
        ];

        $validated = $this->validate($baseRule);

        $user = User::create($validated);

        Auth::login($user);

        Session::regenerate();

        redirect(route('home', absolute: false));
    }

    /**
     * Validate the user's credentials.
     */
    protected function validateCredentials(): User
    {
        $credentials = ['email' => $this->email];

        $user = Auth::getProvider()->retrieveByCredentials([...$credentials, 'password' => $this->password]);

        if (! $user || ! Auth::getProvider()->validateCredentials($user, ['password' => $this->password])) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return $user;
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }

    public function toggleForm()
    {
        $this->resetExcept(['isLoginForm']);
        $this->resetErrorBag();

        $this->isLoginForm = ! $this->isLoginForm;
    }

    /**
     * Validate the given reCAPTCHA token.
     * currently not used
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateRecaptcha(string $token): void
    {
        // validate Google reCaptcha.
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $token,
            'remoteip' => request()->ip(),
        ]);
        $throw = fn ($message) => throw ValidationException::withMessages(['recaptcha' => $message]);
        if (! $response->successful() || ! $response->json('success')) {
            $throw($response->json(['error-codes'])[0] ?? 'An error occurred.');
        }
        // if response was score based (the higher the score, the more trustworthy the request)
        if ($response->json('score') < 0.6) {
            $throw('We were unable to verify that you\'re not a robot. Please try again.');
        }
    }
};
?>

<div class="slider-outer-shadow rounded-4xl bg-card-blue relative w-[90vw] mb-10 md:w-[60vw] max-w-4xl clamp-[p,2,3]">
    <form wire:submit="{{ $isLoginForm ? 'login' : 'register' }}">
        <div class="slider-inner-shadow relative overflow-hidden rounded-3xl bg-white clamp-[p,4,8]">
            <div class='text-tictac-primary-blue grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] gap-4'>
                <div class="flex flex-col gap-4">
                    <div class="flex items-end">
                        <h2 class="text-center text-2xl">
                            {{ $isLoginForm ? 'Login' : 'Register' }}
                        </h2>
                    </div>
                    @if ($isLoginForm)
                    <x-login-form />
                    @else
                    <x-register-form />
                    @endif
                    <p class="text-center cursor-pointer w-full" wire:click='toggleForm'>
                        {{ $isLoginForm ? 'Belum punya akun, daftar disini' : 'Sudah punya akun, masuk sini'  }}
                    </p>
                </div>

                <div class="bg-tictac-primary-blue inline-block h-full min-h-0.5 md:min-h-[1em] w-full md:w-0.5 self-stretch"></div>

                <div class="flex flex-col clamp-[gap,2,4]">
                    <h2 class="text-center text-2xl">Login with</h2>
                    <div class="flex flex-col gap-2 rounded-lg bg-gray-100 p-4">
                        {{-- <a href="{{ route('login.auth', ['provider' => 'facebook']) }}">
                        <x-facebook-login-button />
                        </a> --}}
                        <a href="{{ route('login.auth', ['provider' => 'google']) }}">
                            <x-google-login-button />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <button
            class="slider-outer-shadow font-super-comic bg-card-blue absolute -bottom-4 left-1/2 block min-w-fit -translate-x-1/2 cursor-pointer overflow-clip rounded-full clamp-[p,2,3] text-center"
            type="submit">
            <span class="slider-inner-shadow bg-tictac-secondary-yellow relative block overflow-clip rounded-full">
                <span class="text-tictac-primary-blue block size-full px-3 py-1 clamp-[text,xs,xl]">Submit</span>
            </span>
        </button>
    </form>

    <div x-on:click="openAuth = false" class="absolute  clamp-[right,-2,-4] clamp-[top,-2,-4] cursor-pointer">
        <img class="clamp-[size,9,14]" src="{{asset('img/close-icon.png')}}">
    </div>

</div>
