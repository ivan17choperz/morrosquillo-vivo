@extends('layouts.main')
@section('content')
    <div class="container flex flex-col justify-center items-center animate__animated animate__fadeIn">
        <h3 class="py-5 font-bold text-green-900">{{ $curso->title }}</h3>
        <ul class="collapsible popout flex flex-col justify-center w-full animate__animated animate__zoomInUp ">
            @if ($videos->count() > 0)
                <li class="p-5 font-bold text-green-900 text-2xl">Contenido del Curso</li>
                @foreach ($videos as $video)
                    <li class="text-xl text-green-700">
                        <div class="collapsible-header">
                            {{ $loop->index + 1 }}. {{ $video->title }}
                        </div>
                        <div class="collapsible-body flex w-full justify-center items-center">
                            <div class="video-containter">
                                <iframe class="hide-on-med-and-down" width="1013" height="570" src="{{ $video->url }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                                <iframe class="w-full"  src="{{ $video->url }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </li>
                @endforeach
            @else
                <li>No hay videos en este momento</li>
            @endif
        </ul>

        {{-- <form  class="max-w-max bg-green-500 hover:bg-green-800 text-white font-bold text-2xl p-5 rounded shadow-lg">
            <button>Generar Certificado</button>
        </form> --}}
    </div>
@endsection
