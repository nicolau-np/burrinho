<?php

namespace App\Http\Livewire\User;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $name, $email, $password, $phone, $morada, $confirmpassword;

    public function submit()
    {
        $this->validate([
            'name' => ['required', 'string', 'unique:usuarios,name'],
            'email' => ['required', 'string', 'unique:usuarios,email'],
            'password' => ['required', 'string', 'min:7'],
            'confirmpassword' => ['required', 'string', 'min:7'],
            'phone' => ['required', 'integer', 'min:9',],
            'morada' => ['required', 'string', 'min:5'],
        ]);

        if ($this->password != $this->confirmpassword) {
            return back()->with(['error' => "Confirmação de Palavra-Passe Incorrecta"]);
        }

        $password = Hash::make($this->password);
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $password,
            'acess' => "user",
            'morada' => $this->morada,
            'phone' => $this->phone,
            'online' => "off",
            'status' => "on",
        ];

        DB::beginTransaction();
        try {
            $user = User::create($data);
            DB::commit();
            return redirect('/user/login');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }


    public function render()
    {
        $data = [
            'title' => "Registro",
            'menu' => "Registro",
            'submenu' => "registro",
            'type' => "register",
        ];
        return view('livewire.user.register', $data);
    }
}