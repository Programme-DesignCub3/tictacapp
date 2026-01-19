<div class="slider-outer-shadow rounded-4xl bg-tictac-primary-blue relative mb-10 w-[60vw] max-w-4xl p-2">
    <div class="slider-inner-shadow relative overflow-clip rounded-3xl bg-white p-8">

        <div class='text-tictac-primary-blue grid grid-cols-[1fr_auto_1fr] gap-4'>
            <div class="flex flex-col gap-4">
                <h2 class="text-center text-2xl">{{ $isLoginForm ? 'Login' : 'Register' }}</h2>
                @if ($isLoginForm)
                    <livewire:login-form />
                @else
                    <livewire:register-form />
                @endif
            </div>

            <div class="bg-tictac-primary-blue inline-block h-full min-h-[1em] w-0.5 self-stretch"></div>

            <div class="flex flex-col gap-4">
                <h2 class="text-center text-2xl">Login with</h2>
                <div class="flex flex-col gap-2 rounded-lg bg-gray-100 p-4">
                    <a href="{{ route('login.auth', ['provider' => 'facebook']) }}">
                        <x-facebook-login-button />
                    </a>
                    <a href="{{ route('login.auth', ['provider' => 'google']) }}">
                        <x-google-login-button />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <a class="slider-outer-shadow font-super-comic bg-tictac-primary-blue absolute -bottom-4 left-1/2 block min-w-fit -translate-x-1/2 overflow-clip rounded-full p-2 text-center"
        {{-- href="{{ $link }}" --}} href="#">
        <span class="slider-inner-shadow bg-tictac-secondary-yellow relative block overflow-clip rounded-full">
            <span class="text-tictac-primary-blue block size-full px-3 py-1 text-xs">Submit</span>
        </span>
    </a>
</div>
