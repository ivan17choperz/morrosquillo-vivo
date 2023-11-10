@extends('layouts.main')

@section('title')
    Crear nuevo usuario
@endsection

@section('content')
    <div class=" text-green-900 w-full flex items-center animate__animated animate__fadeIn">
        <div class="w-6/12 pl-20">
            <div class="slider rounded-lg">
                <ul class="slides  rounded-lg">
                    <li>
                        <img src="{{asset('images/16.jpg')}}" class="rounded-lg contrast-75">
                        <div class="caption center-align">
                            <h4 class="font-bold text-white">El océano nos brinda vida, belleza y recursos. Debemos devolverle el favor y protegerlo con todo nuestro corazón.</h4>
                            <p class="text-white ">
                                Sir Richard Branson
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('images/15.jpg')}}" alt="" class="rounded-lg contrast-75">
                        <div class="caption left-align">
                            <h4 class="font-bold">El mar es el corazón del planeta, y debemos protegerlo como si fuera nuestro propio corazón.</h4>
                            <p class="ligth">
                                Jean-Michel Cousteau
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('images/14.jpg')}}" alt="" class="rounded-lg contrast-75">
                        <div class="caption rigth-align">
                            <h4 class="font-bold">No heredamos la Tierra de nuestros antepasados, la tomamos prestada de nuestros hijos</h4>
                            <p class="ligth">
                                Proverbio indígena americano
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-6/12 p-20">
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
                    <button
                        class="waves bg-green-500 shadow-lg shadow-green-600 rounded w-full p-3 text-white font-bold">Registrame</button>
                </div>
                <hr class="mt-5">
                <div class="input-field col s12 redirects-links-forms">
                    <h6 class="font-bold">¿Ya tienes una cuenta?</h6>
                    <a href="/auth/login">Iniciar Sesion</a>
                </div>
            </form>
        </div>
    </div>
@endsection
