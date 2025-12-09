<div>

<div class="row mb-2 d-flex justify-content-end">
    <div class="col-2">
        <div class="btn-group">
            <livewire:pedidos.modal-btn-agregar-productos :state="$state"/>

            <button class="btn btn-primary btn-sm rounded-circle ml-3 mr-3">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</div>

<div class="row clearfix d-flex justify-content-center">

        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Datos del cliente</h5>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="nombre" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="apellido" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-id-card"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="cedula" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-phone"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="telefono" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-sm-8">
            
            <div class="card">
                <div class="card-body">

                @if (count($this->state) == 0)
                    <div class="alert alert-warning">
                        No ha seleccionado ningun producto
                    </div>
                @else
                    @foreach ($this->getState() as $producto)
                        <div class="row clearfix d-flex justify-content-center">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-1">
                                        
                                        <input type="checkbox" wire:model="state" value="{{ $producto->id }}" hidden>
                                        <p class="text-center card-title">{{ $producto->name }}</p>
                                        <p class="text-center card-text">{{ $producto->price }}</p>
                                        <livewire:pedidos.cantidad-component/>

                                        <div class="row clearfix d-flex justify-content-center mt-4">
                                            <div class="col-md-2 d-flex justify-content-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary btn-sm rounded-circle mr-2">
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                    <livewire:pedidos.personalizar-producto :id_producto="$producto->id" />
                                                   
                                                </div>
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

        

        
</div>


    <div class="row d-flex justify-content-center mt-4 mb-4">
        <div class="col-3">
            
        </div>
    </div>

</div>

    

    
