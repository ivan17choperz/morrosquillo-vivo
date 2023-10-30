@extends('layouts.main')

@section('title')
    Editar Especie
@endsection

@section('content')
    <div class="  container w-full flex justify-between">

        <div class="w-6/12 p-10">
            <h3 class="pb-10 font-bold">Actualizar Especie</h3>
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
        <div class="w-6 p-5">

        </div>
    </div>
@endsection
