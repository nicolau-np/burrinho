<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Chat extends Component
{
    public function render()
    {
        $data = [
            'title'     => "Chat Online",
            'menu' => "Chat",
            'submenu' => "Amigos Online",
            'type' => "user"
        ];
        return view('livewire.user.chat', $data);
    }
}