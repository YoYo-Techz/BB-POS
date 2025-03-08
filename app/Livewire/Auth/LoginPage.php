<?php

namespace App\Livewire\Auth;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginPage extends Component
{
    #[Validate('required|email')]
    public string $email;
    #[Validate('required')]
    public string $password;

    public function render()
    {
        if (Auth::check()) {
            $this->redirectRoute('dashboard');
        }
        return view('livewire.auth.login-page');
    }

    public function login()
    {
        $this->validate();

        $user = Admin::where('email', $this->email)->first();

        if (!$user || !Hash::check($this->password, $user->password)) {
            return back()->with('error', 'Email or password incorrect.');
        }
        Auth::login($user);

        $this->redirectRoute('dashboard');
    }
}
