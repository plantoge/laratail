<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
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

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return $this->redirect('/dashboard', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.login')->layout('components.layouts.appauth');
    }
}
