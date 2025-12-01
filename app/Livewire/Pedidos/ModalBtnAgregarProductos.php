<?php

namespace App\Livewire\Pedidos;


use Livewire\Component;
use App\Models\ProductosModel;



class ModalBtnAgregarProductos extends Component
{
    public function render()
    {
        $productos = ProductosModel::all();
        return view('livewire.pedidos.modal-btn-agregar-productos', compact('productos'));
    }
}
