@extends('layouts.main')

@section('title')
    Editar Especie
@endsection

@section('content')
    <div class="  container w-full flex justify-between">

        <div class="w-6/12 p-10">
            <div class="flex items-center">
                <h4 class=" font-bold text-green-900">Actualizar Especie</h4>
            </div>
            <form action="/admin/species/add" method="POST" class="w-full  ">
                @csrf
                <div class="input-field col s12 l12 pb-6">
                    <input type="text" id="name_scientific" name="name_scientific" value="{{ $speice->name_scientific }}"
                        class="name_scientific">
                    <label for="name_scientific">Nombre Cientifico</label>
                </div>
                <div class="input-field col s12 l12 pb-6">
                    <input type="text" id="name_common" name="name_common" value="{{ $speice->name_common }}">
                    <label for="name_common">Nombre Común</label>
                </div>
                <div class="input-field col s12 l12 pb-6">
                    <textarea id="description" name="description" value="{{ $speice->description }}" class="materialize-textarea"
                        rows="10"></textarea>
                    <label for="description">Descripcion</label>
                </div>
                <div class="input-field col s12 l12 pb-6">
                    <textarea id="clas_tax" name="clas_tax" value="{{ $speice->clas_tax }}" class="materialize-textarea" rows="10"></textarea>
                    <label for="clas_tax">Clasificacion taxonomica</label>
                </div>
                <div class="input-field col s12 l12 pb-6">
                    <input type="text" id="averange_size" name="averange_size" value="{{ $speice->averange_size }}">
                    <label for="averange_size">Tamaño promedio</label>
                </div>
                <div class="input-field col s12 l12 pb-6">
                    <input type="text" id="references" name="references" value="{{ $speice->references }}">
                    <label for="references">Referencias</label>
                </div>
                <button
                    class="right py-2 px-7 text-2xl text-white font-bold shadow-lg shadow-yellow-600 rounded-lg hover:bg-yellow-500 transition bg-yellow-400">
                    Actualizar
                </button>
            </form>
        </div>
        <div class="w-6/12 p-5">
            <img src="{{ $speice->url }}" alt="" class="rounded-lg shadow-xl mt-5" />
            <a href="/admin/species/add"
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
        </div>
    </div>
@endsection
