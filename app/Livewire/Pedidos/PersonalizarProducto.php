<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;
use App\Models\IngredientesModel;

class PersonalizarProducto extends Component
{
    public $id_producto;
    public $ingredientesSeleccionados = [];

    public function visualizarIngredientes(){
        $ingredientes = IngredientesModel::where('producto_id', $this->id_producto)->get();
        foreach ($ingredientes as $ingrediente) {
            $this->ingredientesSeleccionados[] = $ingrediente;
        }
    }
    
    public function mount($id_producto){
        $this->id_producto = $id_producto;
        $this->visualizarIngredientes();
    }

    public function getIngredientes(){
        return $this->ingredientesSeleccionados;
    }

    public function render()
    {
        return view('livewire.pedidos.personalizar-producto', [
            'ingredientesSeleccionados' => $this->getIngredientes()
        ]);
    }
}
