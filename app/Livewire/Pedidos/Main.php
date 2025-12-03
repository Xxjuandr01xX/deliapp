<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;
use App\Models\ProductosModel;
use Livewire\Attributes\On;

class Main extends Component
{
    public $state = [];

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

    #[On('agregarProducto')]
    public function agregarProducto($id){
        $producto = ProductosModel::find($id);
        $this->state[] = $producto;
        return $this->state; 
    }
}
