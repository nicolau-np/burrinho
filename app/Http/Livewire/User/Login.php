<?php

namespace App\Http\Livewire\User;

use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function submit()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);


        $user = User::where(['email' => $this->email])->first();
        if (!$user) {
            return back()->with(['error' => "Email incorrecto"]);
        }

        if ($user->status == "off") {
            return back()->with(['error' => "Usuário bloqueado, sem permissão."]);
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('home');
        } else {
            return back()->with(['error' => "Palavra passe incorrecta"]);
        }
    }

    public function render()
    {
        $data = [
            'title' => "Iniciar Sessão",
            'menu' => "Login",
            'submenu' => "login",
            'type' => "login"
        ];
        return view('livewire.user.login', $data);
    }
}