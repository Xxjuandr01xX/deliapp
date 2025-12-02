<div class="row clearfix d-flex justify-content-center">
        <div class="col-md-10 col-sm-12">
            <h1>Detalles del pedido</h1>
            <div class="row mb-2 d-flex justify-content-end">
                <livewire:pedidos.modal-btn-agregar-productos :state="$state"/>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered table-sm w-100" id="table">
                        <thead>
                            <tr>
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
                                @php
                                    print_r($this->state);
                                @endphp
                            @endif
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


    

    
