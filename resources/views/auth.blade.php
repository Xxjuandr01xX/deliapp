<x-login>
    <form action="{{ route('verify') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Usuario</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</x-login>    