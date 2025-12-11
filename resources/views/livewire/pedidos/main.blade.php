<div>

    <div class="row mb-2 d-flex justify-content-end">
        <div class="col-2">
            <div class="btn-group">
                <livewire:pedidos.modal-btn-agregar-productos :state="$state"/>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="store">
        @csrf
        @method('POST')

        <div class="row clearfix d-flex justify-content-center">

                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datos del cliente</h5>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" wire:model="nombre" class="form-control" placeholder="nombre" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            @error('nombre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" wire:model="apellido" class="form-control" placeholder="apellido" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            @error('apellido')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-id-card"></i>
                                </span>
                                <input type="text" wire:model="cedula" class="form-control" placeholder="cedula" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            @error('cedula')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <input type="text" wire:model="telefono" class="form-control" placeholder="telefono" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            @error('telefono')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="row clearfix mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-sm rounded-pill ml-3 mr-3" wire:click="store" type="submit">
                                        Siguiente <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
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
                            @php
                                $key = 0;
                            @endphp
                            @foreach ($this->getState() as $producto)
                                @php
                                    $key++;
                                @endphp                            
                                <div class="row clearfix d-flex justify-content-center">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body p-1">
                                                
                                                <input type="checkbox" value="{{ $producto->id }}" hidden>
                                                <p class="text-center card-title">{{ $producto->name }}</p>
                                                <p class="text-center card-text">
                                                    
                                                    {{ $producto->price }}

                                                    <livewire:pedidos.cantidad-component :id_producto="$producto->id" :key="$key"/>

                                                </p>

                                                <div class="row clearfix d-flex justify-content-center mt-4">
                                                    <div class="col-md-2 d-flex justify-content-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary btn-sm rounded-circle mr-2">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        
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
    </form>


    <div class="row d-flex justify-content-center mt-4 mb-4">
        <div class="col-3">
            
        </div>
    </div>

</div>

    

    
