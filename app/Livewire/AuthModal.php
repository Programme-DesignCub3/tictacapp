<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AuthModal extends Component
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

    public function render()
    {
        return view('livewire.auth-modal');
    }
}
