@extends('layouts.main')

@section('title')
    Crear nuevo usuario
@endsection

@section('content')
    <div class="container">
        <form id="registerForm" action="/auth/register" method="POST" class="p-10 z-depth-2" autocomplete="off">
            @csrf
            <h4 class="font-bold">Registrate ahora!</h4>
            <h5>Accede a cursos, capacitaciones y mas ... </h5>
            <div class="input-field col s12 l6 mt-5">
                <input type="text" id="name" name="name" class="validate">
                <label for="name">Nombres</label>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" id="surname" name="surname" class="validate">
                <label for="surname">Apellidos</label>
            </div>
            <div class="input-field col s12 l6">
                <select name="sex">
                    <option value="---" disabled selected>Sexo</option>
                    <option value="male">Hombre</option>
                    <option value="famale">Mujer</option>
                </select>
            </div>
            <div class="input-field col s12 l6">
                <input type="text" id="address" name="address" class="validate">
                <label for="address">Direccion</label>
            </div>

            <div class="input-field col s12 l6">
                <input type="number" id="phone" name="phone" class="validate">
                <label for="phone">Teléfono</label>
            </div>


            <div class="input-field col s12">
                <input type="email" id="email" name="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <textarea id="nameuser" name="nameuser" class="materialize-textarea"></textarea>
                <label for="nameuser">Nombre de Ususario</label>
            </div>
            <div class="input-field col s12">
                <input type="password" id="password" name="password" class="materialize-textarea"></input>
                <label for="password">Contraseña</label>
            </div>
            <div class="input-field col s12">
                <button class="btn-form btn p-5 cyan waves">Registrame</button>
            </div>
            <hr class="mt-5">
            <div class="input-field col s12 redirects-links-forms">
                <h6 class="font-bold">¿Ya tienes una cuenta?</h6>
                <a href="/auth/login">Iniciar Sesion</a>
            </div>
        </form>
    </div>
@endsection
