<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Auth extends Component
{
    #[Title('Login')]
    public function login()
    {
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth')->layout('components.layouts.appauth');
    }
}
