<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class AuthModal extends Component
{
    #[Locked]
    public $isLoginForm = false;

    public function render()
    {
        return view('livewire.auth-modal');
    }
}
