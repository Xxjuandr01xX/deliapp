<x-login>
    <form action="{{route('authenticar')}}" method="POST" class="">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Usuario</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <input type="submit" value="Iniciar Sesión" class="btn btn-primary">
    </form>
</x-login>    