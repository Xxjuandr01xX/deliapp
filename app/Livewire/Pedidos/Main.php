<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;
use App\Models\ProductosModel;
use App\Models\IngredientesModel;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class Main extends Component
{
    public $state = [];
    public $total = 0;
    public $ingredientes = [];
    public $pedido = [];


    //Datos del cliente
    #[Validate('required | string | max:255', message: 'El nombre es requerido.')]
    public $nombre   = "";
    #[Validate('required | string | max:255', message: 'El apellido es requerido.')]
    public $apellido = "";
    #[Validate('required | numeric | max:8', message: 'La cedula es requerida.')]
    public $cedula   = "";
    #[Validate('required | numeric | max:11', message: 'El telefono es requerido.')]
    public $telefono = "";


    public function store(){
        $validateData = $this->validate([
            'nombre'   => 'required | string | max:255',
            'apellido' => 'required | string | max:255',
            'cedula'   => 'required | numeric | max:8',
            'telefono' => 'required | numeric | max:11',
            'pedido'   => 'required | array',
        ]);
        dd($validateData);
    }

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
        /**
         * quitar el producto del array state
         */
        $this->state = array_filter($this->state, fn($producto) => $producto->id != $id);
        return $this->state;
    }


}
