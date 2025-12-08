<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm rounded-circle" data-toggle="modal" data-target="#ModalSeleccionarProductos">
    <i class="fas fa-edit"></i>
    </button>

<!-- Modal -->
<div class="modal fade" id="ModalSeleccionarProductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seleccionar ingredientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
      <div class="modal-body">
        <p class="text-center font-weight-bold mb-2 mt-2">Ingredientes Base del producto</p>
        @foreach ($ingredientesSeleccionados as $ingrediente)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="{{ $ingrediente->id }}" checked>
                <label class="form-check-label" for="{{ $ingrediente->id }}">
                {{ $ingrediente->cat_ingredientes->name }}
                </label>
            </div>
        @endforeach

        <p class="text-center font-weight-bold mb-2 mt-2">Ingredientes Adicionales</p>
      </div>
    </div>
  </div>
</div>

</div>