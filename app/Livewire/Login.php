<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login')]
    public $email;
    public $password;

    public function attempt()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.login')->layout('components.layouts.appauth');
    }
}
