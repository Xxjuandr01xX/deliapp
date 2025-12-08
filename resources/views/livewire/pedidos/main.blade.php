<div>

<div class="row mb-2 d-flex justify-content-end">
    <div class="col-2">
        <livewire:pedidos.modal-btn-agregar-productos :state="$state"/>
    </div>
</div>

<div class="row clearfix d-flex justify-content-center">
        
        <div class="col-md-5 col-sm-7">
            
            <div class="card">
                <div class="card-body">

                @if (count($this->state) == 0)
                    <div class="alert alert-danger">
                        No hay productos
                    </div>
                @else
                    @foreach ($this->getState() as $producto)
                        <div class="row clearfix d-flex justify-content-start">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-1">
                                        <p class="text-center card-title">{{ $producto->name }}</p>
                                        <p class="text-center card-text">{{ $producto->price }}</p>
                                        <livewire:pedidos.cantidad-component/>

                                        <div class="row clearfix d-flex justify-content-center mt-4">
                                            <div class="col-2">
                                                <button class="btn btn-primary btn-sm rounded-circle">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <livewire:pedidos.personalizar-producto :id_producto="$producto->id" />

                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>

        <div class="col-md-5 col-sm-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resumen</h5>
                    <strong><p class="card-text text-success">Total: $100</p></strong>
                </div>
            </div>
        </div>

    </div>
</div>

    

    
