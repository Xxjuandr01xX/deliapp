<div>

    <button type="button" class="btn btn-primary btn-sm rounded-circle shadow" data-toggle="modal" data-target="#exampleModal">
    
    <i class="fa fa-plus"></i> 

    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
        
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered table-sm w-100">
                    <thead>
                        <tr class="text-center">
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($productos) == 0)
                            <tr>
                                <td colspan="3" class="text-center">No hay productos</td>
                            </tr>
                        @else
                        @foreach ($productos as $producto)
                            <tr wire:key="{{ $producto->id }}" class="text-center">
                                <td>{{ $producto->name }}</td>
                                <td>{{ $producto->price }}</td>
                                <td>
                                    <button wire:click="agregarProducto({{ $producto->id }})" type="button" class="btn btn-success btn-sm rounded-circle shadow">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        </div>
    </div>
    </div>

</div>



