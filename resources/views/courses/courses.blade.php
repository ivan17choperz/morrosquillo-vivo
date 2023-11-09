@extends('layouts.main')
@section('title')
    Cursos Disponibles
@endsection

@section('content')
    <div class="container animate__animated animate__fadeIn">
        <h3 class="font-bold text-green-900 pb-10">Capacitaciones Disponibles</h3>
        <div class="grid grid-cols-3 row-auto gap-5">
            @foreach ($cursos as $curso)
                <div class="card   col-span-1 row-span-1 animate__animated animate__slideInUp">
                    <div class="card-image">
                        <img src="https://loremflickr.com/100/100" alt="" />
                        <h5 class="ml-5 text-green-900 font-bold text-center">{{ $curso->title }}</h5>
                    </div>
                    <div class="p-5">
                        <a href="/cursos/{{$curso->id}}"
                            class="w-full p-3 block  hover:shadow-green-800 text-center transition-all text-white bg-green-500 rounded hover:shadow-lg font-bold ">
                            Ver detalles de capacitación
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
