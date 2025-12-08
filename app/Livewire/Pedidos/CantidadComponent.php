<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;

class CantidadComponent extends Component
{
    public $cantidad = 1;
    
    public function render()
    {
        return view('livewire.pedidos.cantidad-component', [
            'cantidad' => $this->cantidad
        ]);
    }

    public function incrementar()
    {
        $this->cantidad++;
    }

    public function decrementar()
    {
        if ($this->cantidad > 1) {
            
            $this->cantidad--;
        }
    }   
}
