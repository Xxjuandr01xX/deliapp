<x-app.layout>
    <div class="row clearfix justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Perfil de Usuario </h5>
                    <p class="card-text">Información del usuario</p>

                    <div class="row justify-content-center">
                        <div class="col-md-6 align-items-center">
                            <img src="{{ asset('template/img/undraw_profile.svg') }}" alt="Profile Image" class="img-fluid" height="200" width="200">
                        </div>
                        <div class="col-md-6 align-items-start">
                            <h5>Nombre: {{ $user->name }}</h5>
                            <h5>Correo: {{ $user->email }}</h5>
                            <h5>Rol: {{ $user->role }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app.layout>
