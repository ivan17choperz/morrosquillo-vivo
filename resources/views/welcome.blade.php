@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <div class="w-full mx-auto relative  animate__animated animate__fadeIn">
        <div class="slider absolute ">
            <ul class="slides ">
                <li class="">
                    <img src="{{ asset('images/1.jpg') }}" class="contrast-50 " alt="">
                    <div class="caption left-align">
                        <h1 class="font-bold pb-5">Morrosquillo vivo</h1>
                        <h4 class="font-light pb-10">
                            Cada paso que damos para proteger el Golfo de Morrosquillo es un paso hacia un futuro más
                            sostenible. Tú puedes marcar la diferencia. Únete a nuestra causa y ayúdanos a garantizar que
                            este paraíso siga siendo un lugar de asombro para las generaciones futuras.
                        </h4>
                        <a href="#"
                            class="lg:w-4/12  hover:bg-green-700 hover:shadow-sm transition-all flex text-center p-5 text-2xl font-bold  rounded text-white  items-center justify-center  bg-green-500 shadow-lg shadow-green-600">
                            Saber mas
                        </a>
                    </div>
                </li>
                <li >
                    <img src="{{ asset('images/2.jpg') }}" class="contrast-75" alt="img">
                    <div class="caption center-align flex flex-col justify-center items-center">
                        <h1 class="font-bold pb-3">Morrosquillo vivo</h1>
                        <h4 class="font-light pb-10">
                            Cada visita al Golfo es una oportunidad para aprender sobre la importancia de la conservación
                            marina. Nuestros programas educativos y actividades de voluntariado te permitirán participar
                            activamente en la preservación de este tesoro natural.
                        </h4>
                        <a href="#"
                            class="lg:w-4/12  hover:bg-green-700 hover:shadow-sm transition-all flex text-center p-5 text-2xl font-bold  rounded text-white  items-center justify-center  bg-green-500 shadow-lg shadow-green-600">
                            Registrate Ahora
                        </a>
                    </div>
                </li>
                <li >
                    <img src="{{ asset('images/3.jpg') }}" class="contrast-50" alt="">
                    <div class="caption right-align">
                        <h1 class="font-bold pb-3">Morrosquillo vivo</h1>
                        <h4 class="font-light">
                            Tu visita al Golfo no solo será una experiencia inolvidable, sino un acto de amor hacia la
                            naturaleza. Al elegirnos, eliges la conservación. Juntos, podemos lograr un impacto positivo y
                            asegurar que el Golfo de Morrosquillo perdure en todo su esplendor.
                        </h4>
                    </div>
                </li>
                <li >
                    <img src="{{ asset('images/4.jpg') }}" class="contrast-50" alt="">
                    <div class="caption left-align">
                        <h1 class="font-bold">Morrosquillo vivo</h1>
                        <h4 class="pb-10"> Descubre nuestra plataforma y empieza capacitarte</h4>
                        <a href="#"
                            class="lg:w-4/12  hover:bg-green-700 hover:shadow-sm transition-all flex text-center p-5 text-2xl font-bold  rounded text-white  items-center justify-center  bg-green-500 shadow-lg shadow-green-600">
                            Registrate Ahora
                        </a>
                    </div>
                </li>
            </ul>
        </div>



        {{-- stadistics --}}
        <div class="px-14 py-32 w-full flex ">
            <div class="flex flex-col justify-center items-center w-4/12 font-bold text-green-900">
                <h3 class="text-5xl mb-10 font-bold">{{$cursos}}</h3>
                <p class="text-3xl font-normal">Cursos en nuestra web</p>
            </div>
            <div class=" flex flex-col justify-center items-center w-4/12 font-bold text-green-900">
                <h3 class="text-5xl mb-10 font-bold">{{$speices}}</h3>
                <p class="text-3xl font-normal">Especies marinas registradas</p>
            </div>
            <div class=" flex flex-col justify-center items-center w-4/12 font-bold text-green-900">
                <h3 class="text-5xl mb-10 font-bold">{{$users}}</h3>
                <p class="text-3xl font-normal">Estudiantes en nuestra web</p>
            </div>
        </div>
    </div>

    <div class="w-full bg-green-950 p-10 text-white  text-center mb-20">
        <h2 class="font-bold pb-5 ">Investiga sobre las especies marinas registradas</h2>
        <p class="text-2xl pb-20">En morrosquillo vivo puedes consultar información sobre las especies marinas, sus habitats
            y muchas cosas mas ...</p>
        <a href="#" class="px-10 py-4 rounded shadow bg-green-500 text-white font-bold text-xl">Conoce mas aqui</a>

        <div class="slider mt-20 rounded-lg shadow-lg ">
            <ul class="slides rounded-lg ">
                <li>
                    <img src="{{ asset('images/6.jpg') }}" class="rounded-lg" alt="imagen-speices">
                </li>
                <li>
                    <img src="{{ asset('images/7.jpg') }}" class="rounded-lg" alt="imagen-speices">
                </li>
                <li>
                    <img src="{{ asset('images/8.jpg') }}" class="rounded-lg" alt="imagen-speices">
                </li>
                <li>
                    <img src="{{ asset('images/9.jpg') }}" class="rounded-lg" alt="imagen-speices">
                </li>
                <li>
                    <img src="{{ asset('images/10.jpg') }}" class="rounded-lg" alt="imagen-speices">
                </li>
            </ul>
        </div>
    </div>
@endsection
