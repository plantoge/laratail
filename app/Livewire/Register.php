<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    #[Title('Register')]
    public $name;
    public $email;
    public $password;
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.register')->layout('components.layouts.appauth');
    }
}
