<?php

namespace App\Livewire\Pedidos;
use Livewire\Component;
use App\Models\ProductosModel;

class CantidadComponent extends Component
{
    public $cantidad = 1;
    public $id_producto;
    public $row;
    public $key;
    public $nro = 0;


    public function mount($id_producto){
        $this->id_producto = $id_producto;
    }
    
    public function render()
    {
        return view('livewire.pedidos.cantidad-component', [
            'cantidad' => $this->cantidad,
            'id_producto' => $this->id_producto,
            'key' => $this->key
        ]);
    }

    public function incrementar()
    {
        $this->cantidad++;
        $this->row[] = ProductosModel::find($this->id_producto);
        $this->row[0]->cantidad = $this->cantidad;
        $this->row[0]->key = $this->key;
        dd($this->row);
        
    }

    public function decrementar()
    {
        if ($this->cantidad > 1) {
            $this->cantidad--;
        }
        return $this->cantidad;
    }   
}
