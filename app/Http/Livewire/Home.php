<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $data = [
            'title' => "Burrinho",
            'menu' => "Home",
            'submenu' => "home",
            'type' => "home",
        ];
        return view('livewire.home', $data);
    }
}