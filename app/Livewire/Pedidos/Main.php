<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;
use App\Models\ProductosModel;

class Main extends Component
{
    public $state = [];

    public $listenners = [
        'agregarProductoAlEstado' => 'setState'
    ];

    public function render()
    {
        return view('livewire.pedidos.main', [
            'state' => $this->getState()
        ]);
    }

    public function mount(){
        $this->state = $this->getState();
        
    }


    public function getState(){
        return $this->state;
    }

    public function setState($state){
        $this->state[] = $state;
    }

    public function agregarProductoAlEstado(array $producto){

        $res = [];
        $res[] = $producto;
        $this->setState($res);

        
    }
}
