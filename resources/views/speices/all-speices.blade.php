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
            <div class="card horizontal">
                <div class="card-image">
                    <img src="https://loremflickr.com/400/400">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h4 class="text-green-900 font-bold capitalize pb-5">nombre de la especie</h4>
                        <p class="text-green-900 text-xl mt-5 font-bold">
                            Nombre cientifico:
                            <span class="font-normal ml-2 capitalize">
                                loquesea
                            </span>
                        </p>
                        <p class="text-green-900 text-xl mt-5 font-bold">
                            Descripción:
                            <span class="font-normal ml-2 capitalize">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis itaque.
                                Assumenda molestiae suscipit nobis molestias deleniti iste cum omnis repellat voluptates,
                                esse dicta dolore mollitia ullam corrupti optio totam.
                            </span>
                        </p>
                        <p class="text-green-900 text-xl mt-5 font-bold">
                            Clasificación Taxonomica:
                            <span class="font-normal ml-2 capitalize">
                                A+
                            </span>
                        </p>
                        <p class="text-green-900 text-xl mt-5 font-bold">
                            Tamaño promedio:
                            <span class="font-normal ml-2 capitalize">
                                15-35 cm
                            </span>
                        </p>
                        <a href="#" class="flex justify-center items-center hover:bg-green-500 hover:text-white hover:shadow-lg hover:shadow-green-600 transition-all font-bold text-xl  w-3/12 border border-green-500 p-3 text-green-500 rounded-lg mt-3">
                            Saber mas
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
