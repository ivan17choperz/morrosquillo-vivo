@extends('layouts.main')
@section('title')
    Cursos Disponibles
@endsection

@section('content')
    <div class="container ">
        <h3 class="">Cursos Disponibles</h3>
        <div class="grid grid-cols-3 row-auto gap-5">
            <div class="card small col-span-1 row-span-1">
                <div class="card-image">
                    <img src="https://loremflickr.com/200/200" alt=""/>
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn btn-form cyan">Empezar Curso</a>
                </div>
            </div>
        </div>
    </div>
@endsection
