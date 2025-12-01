<x-app.layout>

    <div class="row justify-content-center mb-2">
        <div class="col-md-10 col-sm-12 bg-gradient-info p-2" style="border-radius: 10px;">
            <h1 class="text-white"> 🍔 Nuevo pedido</h1>
        </div>
    </div>

    <livewire:pedidos.main />


    


</x-app.layout>

<script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>