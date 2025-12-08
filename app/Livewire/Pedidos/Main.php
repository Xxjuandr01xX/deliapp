<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;
use App\Models\ProductosModel;
use App\Models\IngredientesModel;
use Livewire\Attributes\On;

class Main extends Component
{
    public $state = [];
    public $total = 0;
    public $ingredientes = [];

    public function render()
    {
        return view('livewire.pedidos.main', [
            'state' => $this->getState(),
            'total' => $this->getTotal(),
            'ingredientes' => $this->getIngredientes()
        ]);
    }

    public function mount(){
        $this->state = $this->getState();
        $this->total = $this->getTotal();        
    }

    public function getState(){
        return $this->state;
    }

    public function getTotal(){
        return $this->total;
    } 

    public function getIngredientes(){
        return $this->ingredientes;
    }

    #[On('agregarProducto')]
    public function agregarProducto($id){
        $producto = ProductosModel::find($id);
        $this->state[] = $producto;
        return $this->state; 
    }
    
    public function quitarProducto($id){
        $this->state = array_filter($this->state, fn($producto) => $producto->id != $id);
        return $this->state;
    }


}
