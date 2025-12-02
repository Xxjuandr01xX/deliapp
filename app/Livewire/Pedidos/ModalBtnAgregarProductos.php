<?php

namespace App\Livewire\Pedidos;


use Livewire\Component;
use App\Models\ProductosModel;



class ModalBtnAgregarProductos extends Component
{

    public $state;

    public function agregarProductoAlEstado($id){

        $producto = ProductosModel::find($id);

        $this->state[] = $producto;

        $this->dispatch('agregarProductoAlEstado', array:$this->state);

    }
    
    public function render()
    {
        $productos = ProductosModel::all();
        return view('livewire.pedidos.modal-btn-agregar-productos', compact('productos'));
    }

}
