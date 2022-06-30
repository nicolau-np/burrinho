<?php

namespace App\Http\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $data = [
            'title' => "Sobre",
            'menu' => "Sobre",
            'submenu' => "sobre",
            'type' => "sobre",
        ];
        return view('livewire.about', $data);
    }
}