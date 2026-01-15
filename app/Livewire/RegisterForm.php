<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Livewire\Component;

class RegisterForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function register(): void
    {
        $baseRule = [
            'name' => ['required', 'string', 'max:190'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:190', 'unique:'.User::class],
        ];

        if (! is_null($this->phone)) {
            $this->phone_formatted = formatPhoneNumber($this->phone);
        }

        $validated = $this->validate($baseRule);

        $user = User::create($validated);

        Auth::login($user);

        Session::regenerate();

        redirect(route('home', absolute: false));
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
