<?php

namespace App\Livewire\Pedidos;


use Livewire\Component;
use App\Models\ProductosModel;



class ModalBtnAgregarProductos extends Component
{

    public $state;
    public $key;
    public $row = [];

    public function agregarProducto($id){
    
        $this->dispatch('agregarProducto', id:$id);

    }

    public function mount($state){

        $this->state = $state;
    }
    
    public function render()
    {
        $productos = ProductosModel::all();
        return view('livewire.pedidos.modal-btn-agregar-productos', compact('productos'));
    }

}
