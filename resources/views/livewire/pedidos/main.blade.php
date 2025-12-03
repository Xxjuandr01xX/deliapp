<div class="row clearfix d-flex justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row mb-2 d-flex justify-content-end">
                <livewire:pedidos.modal-btn-agregar-productos :state="$state"/>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered table-sm w-100" id="table">
                        <thead>
                            <tr class="text-center">
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Subtotal</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (count($this->state) == 0)
                                <tr>
                                    <td colspan="5" class="text-center">No hay productos</td>
                                </tr>
                            @else
                                @foreach ($this->getState() as $producto)
                                    <tr class="text-center">
                                        <td>{{ $producto->name }}</td>
                                        <td>
                                            <livewire:pedidos.cantidad-component/>
                                        </td>
                                        <td>{{ $producto->price }}</td>
                                        <td>3.5</td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm rounded-circle shadow">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-sm rounded-circle shadow">
                                                <i class="fa fa-edit"></i>
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


    

    
