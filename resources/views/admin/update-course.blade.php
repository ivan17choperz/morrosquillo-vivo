@extends('layouts.main')
@section('title')
    Editar Curso
@endsection

@section('content')
    <div class="animate__animated animate__fadeIn mt-20">
        <h3 class="text-center  font-bold text-green-900">Actulizar Curso</h3>
        <h5 class="font-bold text-center text-green-900">{{ $curso->title }}</h5>

        <div class="container section p-5 flex justify-center">

            <form action="" method="POST" class="shadow-lg p-5 rounded w-6/12  ">
                @csrf

                <div class="input-field mt-3">
                    <input type="text" id="title" name="title" value="{{ $curso->title }}">
                    <label for="title">Escriba el titulo del curso.</label>
                </div>
                <div class="input-field mt-3">
                    <textarea class="materialize-textarea" id="description" name="description">{{ $curso->description }}</textarea>
                    <label for="description">Escriba los detalles de la capacitación.</label>
                </div>
                <div class="input-field mt-3">
                    <input type="text" id="professional" name="professional" value="{{ $curso->professional }}">
                    <label for="professional">Nombre del Docente.</label>
                </div>
                <div class="input-field mt-3">
                    <input type="number" id="hours" name="hours" value="{{ $curso->hours }}">
                    <label for="hours">Escriba las horas estimadas a la capacitacion.</label>
                </div>

                <button class="px-10 py-5 bg-green-500 text-white text-xl font-bold rounded w-full shadow-lg">
                    Actualizar
                </button>
                <a href="/admin/cursos/add"
                class="bg-green mt-5 flex items-center text-xl font-bold bg-green-500 max-w-max rounded-lg shadow-lg hover:bg-green-700 p-5 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="mr-3 " viewBox="0 0 48 48">
                    <mask id="IconifyId18bafd3602362deef2">
                        <path fill="#fff" fill-rule="evenodd" stroke="#fff" stroke-linejoin="round" stroke-width="4"
                            d="M44 40.836c-4.893-5.973-9.238-9.362-13.036-10.168c-3.797-.805-7.412-.927-10.846-.365V41L4 23.545L20.118 7v10.167c6.349.05 11.746 2.328 16.192 6.833c4.445 4.505 7.009 10.117 7.69 16.836Z"
                            clip-rule="evenodd" />
                    </mask>
                    <path fill="#ffffff" d="M0 0h48v48H0z" mask="url(#IconifyId18bafd3602362deef2)" />
                </svg>
                cancelar
            </a>
            </form>



        </div>

    </div>
    </div>
@endsection
