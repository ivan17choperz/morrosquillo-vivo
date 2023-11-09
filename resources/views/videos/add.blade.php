@extends('layouts.main')

@section('title')
    Agregar Video
@endsection

@section('content')
    <div class=" w-9/12  mx-auto py-10">
        <h3 class="font-bold text-green-900 ">Capacitación {{ $curso->title }}</h3>
        <div class="flex flex-col  w-full ">
            <form method="POST" action="/admin/cursos/{{ $curso->id }}/add/video" class="w-1/2 mt-5 rounde shadow-lg p-10"
                enctype="multipart/form-data">
                @csrf
                <h5 class="font-bold text-green-900 mb-5">Añadir Video </h5>
                <div class="input-field ">
                    <input type="text" id="title" name="title">
                    <label for="title">Titulo del video:</label>
                </div>
                <div class="input-field ">
                    <input type="text" id="url" name="url">
                    <label for="url">URL del video:</label>
                </div>


                <button class="bg-green-500 text-white w-full p-3 rounded font-bold hover:bg-green-800 transition-all">Subir
                    Video</button>
            </form>

            <div class=" mt-5">
                <h4 class="font-bold text-green-950 ">Lista de Videos</h4>

                <table class="p-5 shadow-lg text-green-900 mt-5 h-52 overflow-x-hidden overflow-y-scroll">
                    <thead>
                        <tr>
                            <th class="p-3">Titulo del video</th>
                            <th class="p-3">Vista previa</th>
                            <th class="p-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($videos->count() > 0)
                            @foreach ($videos as $video)
                                <tr>
                                    <td class="w-full h-full text-xl flex justify-center items-center text-center">{{ $video->title }}</td>
                                    <td><iframe src="{{$video->url}}"></iframe></td>
                                    <td><a class="p-3 bg-green-900 shadow-lg text-white font-bold">Eliminar Video</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="p-3">
                                    <h5 class="font-bold">No hay videos para este curso</h5>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
