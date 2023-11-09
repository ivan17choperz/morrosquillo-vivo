@extends('layouts.main')
@section('title')
    Especies
@endsection

@section('content')
    <div class="container">
        <div id="top" class="scrollspy">
            <h2 class="py-5 font-bold text-green-900">Todas las especies marinas</h2>
        </div>
        <div class="scrollspy">
            @foreach ($speices as $speice)
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{ $speice->url }}" width="200px" class="responsive-img">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h4 class="text-green-900 font-bold capitalize pb-5">{{ $speice->name_common }}</h4>
                            <p class="text-green-900 text-xl mt-5 font-bold">
                                Nombre cientifico:
                                <span class="font-normal ml-2 capitalize">
                                    {{ $speice->name_scientific }}
                                </span>
                            </p>
                            <p class="text-green-900 text-xl mt-5 font-bold">
                                Descripción:
                                <span class="font-normal ml-2 capitalize">
                                    {{ $speice->description }}
                                </span>
                            </p>
                            <p class="text-green-900 text-xl mt-5 font-bold">
                                Clasificación Taxonomica:
                                <span class="font-normal ml-2 capitalize">
                                    {{ $speice->clas_tax }}
                                </span>
                            </p>
                            <p class="text-green-900 text-xl mt-5 font-bold">
                                Tamaño promedio:
                                <span class="font-normal ml-2 capitalize">
                                    {{ $speice->averange_size }} cm
                                </span>
                            </p>
                            <a href="{{ $speice->references }}" target="_blank"
                                class="flex justify-center items-center hover:bg-green-500 hover:text-white hover:shadow-lg hover:shadow-green-600 transition-all font-bold xl:text-xl w-8/12  xl:w-3/12 border border-green-500 p-3 text-green-500 rounded-lg mt-3">
                                Saber mas
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
