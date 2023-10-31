@extends('layouts.main')

@section('title')
    Iniciar Sesión
@endsection

@section('content')
    <div class="container  py-10">
        <h3 class=" font-black   text-green-900 block w-full text-center">Inicia Sesión en Morrosquillo vivo</h3>
        <div class=" flex flex-col lg:flex-row  w-full justify-between shadow-xl rounded shadow-green-300 p-10 ">

            {{-- slider --}}
            <div class="w-1/2 ">
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
            {{-- form --}}
            <div class=" w-1/2  p-5 ">
                <form action="/auth/login" class="px-10" method="POST">
                    @csrf
                    <h4 class="font-bold pb-5 text-green-900">Iniciar Sesión</h4>
                    <div class="input-field col s12 l12 pb-5">
                        <input type="text" id="username" name="username" class="validate">
                        <label for="username">Nombre de Usuario</label>
                    </div>
                    <div class="input-field col s12 l12 pb-5">
                        <input type="password" id="password" name="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                    @if (session('loginError'))
                        <p class="text-red-600 block p-3 mb-3 w-full border text-center  rounded border-red-600">Error
                            {{ session('loginError') }}
                        </p>
                    @endif
                    <button
                        class="w-full p-3 hover:bg-green-800 transition-all  text-white rounded shadow text-lg font-bold bg-green-500 ">Iniciar
                        Sesión</button>
                    <hr>
                    <div class="input-field col s12 l12 redirects-links-forms">
                        <h6 class="font-bold text-green-900">¿Aun no tienes cuenta?</h6>
                        <a href="/auth/register" class="text-green-600 ">Crear Cuenta</a>
                    </div>
                    <div class="input-field col s12 l12 redirects-links-forms">
                        <a href="#" class="text-green-600  ">Olvidé mi constraseña</a>
                    </div>

                </form>
            </div>

        </div>
    </div>

    </div>
@endsection
