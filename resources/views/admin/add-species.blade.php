@extends('layouts.main')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="w-full flex p-5 relative">
        <div class="side-nav h-96   w-3/12 shadow-lg shadow-green-500 bg-green-500 rounded-lg text-white">
            <h3 class="font-bold pl-5 pb-3">Menu</h3>
            <ul class="flex flex-col   justify-between">
                <li class="hover:bg-green-700 px-5 transition rounded">
                    <a href="/admin/dashboard" class="flex items-center py-5  font-bold text-2xl text-white ">
                        <div class="icon">
                            <svg width='30px' height='30px' viewBox='0 0 24 24' version='1.1'
                                xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                <title>chart_horizontal_line</title>
                                <g id='Icon' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                    <g id='Business' transform='translate(-384.000000, -480.000000)'>
                                        <g id='chart_horizontal_line' transform='translate(384.000000, 480.000000)'>
                                            <path
                                                d='M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5935,23.2578 L12.5819,23.2595 L12.5109,23.295 L12.4919,23.2987 L12.4767,23.295 L12.4057,23.2595 C12.3958,23.2564 12.387,23.259 12.3821,23.2649 L12.378,23.2758 L12.3609,23.7031 L12.3659,23.7235 L12.3769,23.7357 L12.4805,23.8097 L12.4953,23.8136 L12.5071,23.8097 L12.6107,23.7357 L12.6233,23.7197 L12.6267,23.7031 L12.6096,23.2758 C12.6076,23.2657 12.601,23.2593 12.5935,23.2578 Z M12.8584,23.1453 L12.8445,23.1473 L12.6598,23.2397 L12.6499,23.2499 L12.6472,23.2611 L12.6651,23.6906 L12.6699,23.7034 L12.6784,23.7105 L12.8793,23.8032 C12.8914,23.8069 12.9022,23.803 12.9078,23.7952 L12.9118,23.7812 L12.8777,23.1665 C12.8753,23.1546 12.8674,23.147 12.8584,23.1453 Z M12.143,23.1473 C12.1332,23.1424 12.1222,23.1453 12.1156,23.1526 L12.1099,23.1665 L12.0758,23.7812 C12.0751,23.7927 12.0828,23.8019 12.0926,23.8046 L12.1083,23.8032 L12.3092,23.7105 L12.3186,23.7024 L12.3225,23.6906 L12.3404,23.2611 L12.3372,23.2485 L12.3278,23.2397 L12.143,23.1473 Z'
                                                id='MingCute' fill-rule='nonzero'></path>
                                            <path
                                                d='M6,4 C6,3.44772 5.55228,3 5,3 C4.44772,3 4,3.44772 4,4 L4,20 C4,20.5523 4.44772,21 5,21 L19,21 C19.5523,21 20,20.5523 20,20 C20,19.4477 19.5523,19 19,19 L6,19 L6,4 Z M12,8 C12.5523,8 13,7.55228 13,7 C13,6.44772 12.5523,6 12,6 L9,6 C8.44772,6 8,6.44772 8,7 C8,7.55228 8.44772,8 9,8 L12,8 Z M18,11 C18,11.5523 17.5523,12 17,12 L9,12 C8.44771,12 8,11.5523 8,11 C8,10.4477 8.44771,10 9,10 L17,10 C17.5523,10 18,10.4477 18,11 Z M14,16 C14.5523,16 15,15.5523 15,15 C15,14.4477 14.5523,14 14,14 L9,14 C8.44772,14 8,14.4477 8,15 C8,15.5523 8.44772,16 9,16 L14,16 Z'
                                                id='形状' fill='#FFFFFFFF'></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="ml-3">Panel Principal</p>
                    </a>
                </li>
                <li class="hover:bg-green-700 px-5 transition rounded">
                    <a href="/admin/cursos/add" class="flex items-center py-5 font-bold text-2xl text-white ">
                        <div class="icon">
                            <svg width='30px' height='30px' viewBox='0 0 24 24' version='1.1'
                                xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                <title>drawing_board_line</title>
                                <g id='Icon' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                    <g id='Business' transform='translate(-576.000000, -480.000000)'>
                                        <g id='drawing_board_line' transform='translate(576.000000, 480.000000)'>
                                            <path
                                                d='M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5935,23.2578 L12.5819,23.2595 L12.5109,23.295 L12.4919,23.2987 L12.4767,23.295 L12.4057,23.2595 C12.3958,23.2564 12.387,23.259 12.3821,23.2649 L12.378,23.2758 L12.3609,23.7031 L12.3659,23.7235 L12.3769,23.7357 L12.4805,23.8097 L12.4953,23.8136 L12.5071,23.8097 L12.6107,23.7357 L12.6233,23.7197 L12.6267,23.7031 L12.6096,23.2758 C12.6076,23.2657 12.601,23.2593 12.5935,23.2578 Z M12.8584,23.1453 L12.8445,23.1473 L12.6598,23.2397 L12.6499,23.2499 L12.6472,23.2611 L12.6651,23.6906 L12.6699,23.7034 L12.6784,23.7105 L12.8793,23.8032 C12.8914,23.8069 12.9022,23.803 12.9078,23.7952 L12.9118,23.7812 L12.8777,23.1665 C12.8753,23.1546 12.8674,23.147 12.8584,23.1453 Z M12.143,23.1473 C12.1332,23.1424 12.1222,23.1453 12.1156,23.1526 L12.1099,23.1665 L12.0758,23.7812 C12.0751,23.7927 12.0828,23.8019 12.0926,23.8046 L12.1083,23.8032 L12.3092,23.7105 L12.3186,23.7024 L12.3225,23.6906 L12.3404,23.2611 L12.3372,23.2485 L12.3278,23.2397 L12.143,23.1473 Z'
                                                id='MingCute' fill-rule='nonzero'></path>
                                            <path
                                                d='M12,3 C12.5523,3 13,3.44772 13,4 L13,5 L21,5 C21.5523,5 22,5.44772 22,6 C22,6.55228 21.5523,7 21,7 L21,16 C21.5523,16 22,16.4477 22,17 C22,17.5523 21.5523,18 21,18 L16.4142,18 L17.7071,19.2929 C18.0976,19.6834 18.0976,20.3166 17.7071,20.7071 C17.3166,21.0976 16.6834,21.0976 16.2929,20.7071 L13.5858,18 L10.4142,18 L7.70711,20.7071 C7.31658,21.0976 6.68342,21.0976 6.29289,20.7071 C5.90237,20.3166 5.90237,19.6834 6.29289,19.2929 L7.58579,18 L3,18 C2.44772,18 2,17.5523 2,17 C2,16.4477 2.44772,16 3,16 L3,7 C2.44772,7 2,6.55228 2,6 C2,5.44772 2.44772,5 3,5 L11,5 L11,4 C11,3.44772 11.4477,3 12,3 Z M19,16 L19,7 L5,7 L5,16 L19,16 Z'
                                                id='形状' fill='#FFFFFFFF'></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="ml-3">Cursos</p>
                    </a>
                </li>
                <li class="hover:bg-green-700 px-5 transition rounded">
                    <a href="/admin/species/add" class="flex items-center py-5 font-bold text-2xl text-white ">
                        <div class="icon">
                            <svg width='30px' height='30px' viewBox='0 0 24 24' version='1.1'
                                xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                <title>paw_line</title>
                                <g id='Icon' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                    <g id='Nature' transform='translate(-528.000000, -98.000000)' fill-rule='nonzero'>
                                        <g id='paw_line' transform='translate(528.000000, 98.000000)'>
                                            <path
                                                d='M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5935,23.2578 L12.5819,23.2595 L12.5109,23.295 L12.4919,23.2987 L12.4767,23.295 L12.4057,23.2595 C12.3958,23.2564 12.387,23.259 12.3821,23.2649 L12.378,23.2758 L12.3609,23.7031 L12.3659,23.7235 L12.3769,23.7357 L12.4805,23.8097 L12.4953,23.8136 L12.5071,23.8097 L12.6107,23.7357 L12.6233,23.7197 L12.6267,23.7031 L12.6096,23.2758 C12.6076,23.2657 12.601,23.2593 12.5935,23.2578 Z M12.8584,23.1453 L12.8445,23.1473 L12.6598,23.2397 L12.6499,23.2499 L12.6472,23.2611 L12.6651,23.6906 L12.6699,23.7034 L12.6784,23.7105 L12.8793,23.8032 C12.8914,23.8069 12.9022,23.803 12.9078,23.7952 L12.9118,23.7812 L12.8777,23.1665 C12.8753,23.1546 12.8674,23.147 12.8584,23.1453 Z M12.143,23.1473 C12.1332,23.1424 12.1222,23.1453 12.1156,23.1526 L12.1099,23.1665 L12.0758,23.7812 C12.0751,23.7927 12.0828,23.8019 12.0926,23.8046 L12.1083,23.8032 L12.3092,23.7105 L12.3186,23.7024 L12.3225,23.6906 L12.3404,23.2611 L12.3372,23.2485 L12.3278,23.2397 L12.143,23.1473 Z'
                                                id='MingCute'></path>
                                            <path
                                                d='M5.4025,6.55087 C5.1691,6.05033 4.57412,5.83377 4.07358,6.06717 C3.57304,6.30058 3.35648,6.89556 3.58988,7.3961 L5.4025,6.55087 Z M20.4101,7.39238 C20.6435,6.89185 20.427,6.29686 19.9264,6.06346 C19.4259,5.83005 18.8309,6.0466 18.5975,6.54714 L20.4101,7.39238 Z M13,3.99997 C12.9999,3.44768 12.5522,2.99998 11.9999,3 C11.4476,3.00002 10.9999,3.44775 11,4.00003 L13,3.99997 Z M17,17.2778 C17,17.426 16.8407,17.8588 15.834,18.3095 C14.9075,18.7243 13.5542,19 12,19 L12,21 C13.7595,21 15.4062,20.6924 16.6513,20.1349 C17.8162,19.6134 19,18.6851 19,17.2778 L17,17.2778 Z M12,19 C10.4458,19 9.09246,18.7243 8.16598,18.3095 C7.15933,17.8588 7,17.426 7,17.2778 L5,17.2778 C5,18.6851 6.18381,19.6134 7.34873,20.1349 C8.59383,20.6924 10.2404,21 12,21 L12,19 Z M7,17.2778 C7,16.7491 7.40503,15.9401 8.36366,15.2093 C9.28597,14.5061 10.5754,14 12,14 L12,12 C10.1109,12 8.40031,12.6663 7.15106,13.6188 C5.9381,14.5436 5,15.8735 5,17.2778 L7,17.2778 Z M12,14 C13.4246,14 14.714,14.5061 15.6363,15.2093 C16.595,15.9401 17,16.7491 17,17.2778 L19,17.2778 C19,15.8735 18.0619,14.5436 16.8489,13.6188 C15.5997,12.6663 13.8891,12 12,12 L12,14 Z M6.11154,9.25452 C6.26235,9.57793 6.28316,9.88221 6.23873,10.0936 C6.19438,10.3046 6.10719,10.3599 6.08101,10.3721 L6.92625,12.1848 C7.65088,11.8469 8.05421,11.1794 8.19597,10.505 C8.33765,9.8309 8.24017,9.08696 7.92416,8.40929 L6.11154,9.25452 Z M6.08101,10.3721 C6.05483,10.3843 5.95641,10.4156 5.76625,10.3139 C5.57576,10.2121 5.35604,10.0005 5.20524,9.67714 L3.39262,10.5224 C3.70863,11.2001 4.21586,11.7529 4.8233,12.0777 C5.43109,12.4026 6.20162,12.5227 6.92625,12.1848 L6.08101,10.3721 Z M5.20524,9.67714 C5.05443,9.35374 5.03362,9.04946 5.07805,8.83806 C5.1224,8.62704 5.20959,8.57173 5.23577,8.55952 L4.39054,6.74691 C3.66591,7.08481 3.26258,7.75223 3.12082,8.42668 C2.97914,9.10076 3.07662,9.8447 3.39262,10.5224 L5.20524,9.67714 Z M5.23577,8.55952 C5.26195,8.54732 5.36037,8.51608 5.55053,8.61774 C5.74103,8.71959 5.96074,8.93112 6.11154,9.25452 L7.92416,8.40929 C7.60815,7.73161 7.10092,7.17874 6.49348,6.85399 C5.88569,6.52905 5.11517,6.40901 4.39054,6.74691 L5.23577,8.55952 Z M5.71946,7.2306 L5.4025,6.55087 L3.58988,7.3961 L3.90684,8.07583 L5.71946,7.2306 Z M18.7947,9.67342 C18.6439,9.99682 18.4242,10.2083 18.2337,10.3102 C18.0436,10.4119 17.9451,10.3806 17.919,10.3684 L17.0737,12.181 C17.7984,12.5189 18.5689,12.3989 19.1767,12.074 C19.7841,11.7492 20.2913,11.1963 20.6074,10.5187 L18.7947,9.67342 Z M17.919,10.3684 C17.8928,10.3562 17.8056,10.3009 17.7612,10.0899 C17.7168,9.87848 17.7376,9.5742 17.8884,9.2508 L16.0758,8.40556 C15.7598,9.08324 15.6623,9.82718 15.804,10.5013 C15.9458,11.1757 16.3491,11.8431 17.0737,12.181 L17.919,10.3684 Z M17.8884,9.2508 C18.0392,8.92739 18.259,8.71586 18.4494,8.61402 C18.6396,8.51235 18.738,8.54359 18.7642,8.5558 L19.6094,6.74318 C18.8848,6.40528 18.1143,6.52532 17.5065,6.85026 C16.8991,7.17502 16.3918,7.72789 16.0758,8.40556 L17.8884,9.2508 Z M18.7642,8.5558 C18.7904,8.56801 18.8776,8.62332 18.9219,8.83434 C18.9664,9.04573 18.9455,9.35001 18.7947,9.67342 L20.6074,10.5187 C20.9234,9.84098 21.0208,9.09704 20.8792,8.42296 C20.7374,7.7485 20.3341,7.08108 19.6094,6.74318 L18.7642,8.5558 Z M20.0931,8.07211 L20.4101,7.39238 L18.5975,6.54714 L18.2805,7.22687 L20.0931,8.07211 Z M13,7.5 C13,8.54819 12.3556,9 12,9 L12,11 C13.8535,11 15,9.21323 15,7.5 L13,7.5 Z M12,9 C11.6444,9 11,8.54819 11,7.5 L9,7.5 C9,9.21323 10.1464,11 12,11 L12,9 Z M11,7.5 C11,6.45181 11.6444,6 12,6 L12,4 C10.1464,4 9,5.78677 9,7.5 L11,7.5 Z M12,6 C12.3556,6 13,6.45181 13,7.5 L15,7.5 C15,5.78677 13.8535,4 12,4 L12,6 Z M13,4.99997 L13,3.99997 L11,4.00003 L11,5.00003 L13,4.99997 Z'
                                                id='形状' fill='#FFFFFFFF'></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <p class="ml-3">Especies</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content p-5 w-9/12 shadow-lg ml-3 rounded-lg">
            <h4 class="font-bold text-green-900 pb-3">Agregar especie marina</h4>

            <div class="w-full flex justify-between">
                <div class="w-5/12 px-10">
                    <form action="/admin/species/add" method="POST" class="w-full  ">
                        @csrf
                        <div class="input-field col s12 l12 pb-6">
                            <input type="text" id="name_scientific" name="name_scientific" class="name_scientific">
                            <label for="name_scientific">Nombre Cientifico</label>
                        </div>
                        <div class="input-field col s12 l12 pb-6">
                            <input type="text" id="name_common" name="name_common">
                            <label for="name_common">Nombre Común</label>
                        </div>
                        <div class="input-field col s12 l12 pb-6">
                            <textarea id="description" name="description" class="materialize-textarea" rows="10"></textarea>
                            <label for="description">Descripcion</label>
                        </div>
                        <div class="input-field col s12 l12 pb-6">
                            <textarea id="clas_tax" name="clas_tax" class="materialize-textarea" rows="10"></textarea>
                            <label for="clas_tax">Clasificacion taxonomica</label>
                        </div>
                        <div class="input-field col s12 l12 pb-6">
                            <input type="text" id="averange_size" name="averange_size">
                            <label for="averange_size">Tamaño promedio</label>
                        </div>
                        <div class="input-field col s12 l12 pb-6">
                            <input type="text" id="references" name="references">
                            <label for="references">Referencias</label>
                        </div>
                        <div class="input-field col s12 l12 pb-6">
                            <input type="text" id="url" name="url">
                            <label for="url">Url de la imagen</label>
                        </div>
                        <button
                            class="right py-2 px-7 text-lg text-white font-bold shadow-lg flex items-center shadow-green-700 rounded-lg hover:bg-green-700 transition bg-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="mr-3"
                                viewBox="0 0 32 32">
                                <path fill="#ffffff"
                                    d="m27.71 9.29l-5-5A1 1 0 0 0 22 4H6a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V10a1 1 0 0 0-.29-.71ZM12 6h8v4h-8Zm8 20h-8v-8h8Zm2 0v-8a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v8H6V6h4v4a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6.41l4 4V26Z" />
                            </svg>
                            Agregar
                        </button>
                    </form>
                </div>
                <div class="w-7/12 h-96 overflow-y-scroll">
                    <table class=" text-green-900 text-center  ">
                        <thead>
                            <tr>
                                <th data-field="id">Nombre Cientifico</th>
                                <th data-field="name">Nombre Comun</th>
                                <th data-field="price">Detalles</th>
                                <th data-field="price">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($speices as $speice)
                                <tr>
                                    <td>{{ $speice->name_scientific }}</td>
                                    <td>{{ $speice->name_common }}</td>
                                    <td>
                                        <a href="{{ $speice->references }}" target="_blank" class="text-green-700">
                                            Saber mas
                                        </a>
                                    </td>
                                    <td class="flex justify-center">
                                        <a href="/admin/species/edit/{{ $speice->id }}"
                                            class=" p-3 flex items-center rounded shadow-lg transition-all hover:bg-yellow-500 shadow-green-700 bg-green-500 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3" width="16"
                                                height="16" viewBox="0 0 24 24">
                                                <path fill="none" stroke="#ffffff" stroke-width="2"
                                                    d="M1.75 16.002C3.353 20.098 7.338 23 12 23c6.075 0 11-4.925 11-11m-.75-4.002C20.649 3.901 16.663 1 12 1C5.925 1 1 5.925 1 12m8 4H1v8M23 0v8h-8" />
                                            </svg>
                                            Actualizar
                                        </a>
                                        <form action="/admin/species/delete/{{ $speice->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="ml-3 p-3 rounded shadow-lg flex items-center hover:bg-red-600 transition-all  shadow-green-900 bg-green-700 text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3" width="20"
                                                    height="20" viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M7 21q-.825 0-1.413-.588T5 19V6q-.425 0-.713-.288T4 5q0-.425.288-.713T5 4h4q0-.425.288-.713T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z" />
                                                </svg>
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
