@extends('layouts.main')

@section('title')
    Iniciar Sesión
@endsection

@section('content')
    <div class="container  py-10">
        <h4 class=" font-black   text-cyan-400 block w-full text-center">Iniciar Sesion en Morrosquillo vivo</h4>
        <div class=" flex flex-col lg:flex-row  w-full justify-between shadow-xl rounded shadow-cyan-200 p-10 ">

            {{-- slider --}}
            <div class="w-1/2 ">
                <div class="slider rounded-lg">
                    <ul class="slides  rounded-lg">
                        <li>
                            <img src="https://loremflickr.com/400/700" class="rounded-lg contrast-75">
                            <div class="caption center-align">
                                <h4 class="font-bold text-white">Lorem, ipsum.</h4>
                                <h6 class="text-white ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, architecto?
                                </h6>
                            </div>
                        </li>
                        <li>
                            <img src="https://loremflickr.com/400/700" alt="">
                            <div class="caption left-align">
                                <h3 class="font-bold">Lorem, ipsum.</h3>
                                <p class="ligth">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, architecto?
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="https://loremflickr.com/400/700" alt="">
                            <div class="caption rigth-align">
                                <h3 class="font-bold">Lorem, ipsum.</h3>
                                <p class="ligth">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, architecto?
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
                    <h4 class="font-bold pb-5 text-cyan-700">Iniciar Sesión</h4>
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
                        class="w-full p-3 hover:bg-cyan-800 transition-all  text-white rounded shadow text-lg font-bold bg-cyan-500 ">Iniciar
                        Sesión</button>
                    <hr>
                    <div class="input-field col s12 l12 redirects-links-forms">
                        <h6 class="font-bold text-cyan-700">¿Aun no tienes cuenta?</h6>
                        <a href="/auth/register" class="cyan-text ">Crear Cuenta</a>
                    </div>
                    <div class="input-field col s12 l12 redirects-links-forms">
                        <a href="#" class="cyan-text  ">Olvidé mi constraseña</a>
                    </div>

                </form>
            </div>

        </div>
    </div>

    </div>
@endsection
