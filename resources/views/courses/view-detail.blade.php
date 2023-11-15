@extends('layouts.main')

@section('title')
    Cursos
@endsection

@section('content')
    <div class=" animate__animated animate__fadeIn">
        {{-- <h3 class="font-bold text-green-900">Detalles del curso</h3>
         --}}

        <div class="parallax-container">
            <div class="parallax">
                <img src="{{ asset('images/17.jpg') }}" alt="">
            </div>
        </div>
        <div class="container flex flex-col items-center  justify-between p-3  lg:p-10 bg-white">
            <div class="w-full text-center  lg:w-9/12 lg:text-start">
                <h3 class="font-bold text-green-900 hide-on-med-and-down">{{ $curso->title }}</h3>
                <h4 class="font-bold text-center      text-green-900">{{ $curso->title }}</h4>
                <p class="text-xl text-green-900">{{ $curso->description }}</p>

                <h5 class="font-bold text-green-900">Horas estimadas: <span  class="font-normal text-xl">{{$curso->hours}}Hrs</span></h5>
                <h5 class="font-bold text-green-900">Docente: <span  class="font-normal text-xl">{{$curso->professional}}</span></h5>
            </div>
            <div class="w-full lg:w-3/12">
                <form action="/cursos/regiter-student" class="w-full" method="POST">
                    @csrf
                    <input type="hidden" name="id_user" value="{{ $user_id }}">
                    <input type="hidden" name="id_curso" value="{{ $id_curso }}">
                    <button
                        class="w-full bg-green-500 p-3 font-bold text-lg text-white hover:bg-green-800 transition rounded shadow-lg shadow-green-600">Comenzar
                        Capacitacion</button>
                </form>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax">
                <img src="{{ asset('images/18.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
