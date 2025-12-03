<div class="input-group justify-content-center">
    <button wire:click="incrementar" type="button" class="btn btn-primary btn-sm rounded-circle shadow input-group-text"><i class="fa fa-plus"></i></button>
    <input type="number" wire:model="cantidad" disabled class="">
    <button wire:click="decrementar" type="button" class="btn btn-danger btn-sm rounded-circle shadow input-group-text"><i class="fa fa-minus"></i></button>
</div>
