@extends('layouts.main')
@section('title')
    Cursos Disponibles
@endsection

@section('content')
    <div class="container ">
        <h3 class="font-bold text-green-900 pb-10" >Capacitaciones Disponibles</h3>
        <div class="grid grid-cols-3 row-auto gap-5">
            <div class="card  col-span-1 row-span-1">
                <div class="card-image">
                    <img src="https://loremflickr.com/200/200" alt=""/>
                    <h5 class="ml-5 text-green-900 font-bold">Curso 1</h5>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="p-5">
                    <a href="#" class="w-full p-3 block  hover:shadow-green-800 text-center transition-all text-white bg-green-500 rounded hover:shadow-lg font-bold shadow-cyan-500">Empezar Curso</a>
                </div>
            </div>
        </div>
    </div>
@endsection
