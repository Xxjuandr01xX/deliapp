<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $state = [];
        
        return view('livewire.pedidos.main', [
            'state' => $state
        ]);
    }
}
