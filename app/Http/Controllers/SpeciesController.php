<?php

namespace App\Http\Controllers;

use App\Models\Speice;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    public function index()
    {
        $speices = Speice::get();
        return view('speices.all-speices', ['speices' => $speices]);
    }

    public function create()
    {
        $data = Speice::get();
        $speices = [
            'speices' => $data
        ];
        return view('admin.add-species', $speices);
    }
    public function store(Request $req)
    {
        $req->validate([
            'name_scientific' => 'required',
            'name_common' => 'required',
            'description' => 'required',
            'clas_tax' => 'required',
            'averange_size' => 'required',
            'references' => 'required',
            'url' => 'required',
        ]);


        Speice::create([
            'name_scientific' => $req->get('name_scientific'),
            'name_common' => $req->get('name_common'),
            'description' => $req->get('description'),
            'clas_tax' => $req->get('clas_tax'),
            'averange_size' => $req->get('averange_size'),
            'references' => $req->get('references'),
            'url' => $req->get('url'),
        ]);
        return redirect()->back();
    }


    public function show($id)
    {
        $speice = Speice::find($id);
        return view('admin.update-speice', [
            'id' => $id,
            'speice' => $speice
        ]);
    }

    public function update(Request $req, $id)
    {
    }

    public function destroy($id)
    {
        Speice::find($id)->delete();
        return redirect()->back();
    }
}
