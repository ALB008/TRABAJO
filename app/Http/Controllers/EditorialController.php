<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use App\Models\Libro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\storeEditorial;

class EditorialController extends Controller
{
    public function editoriales()
    {
        $editoriales = Editorial::all();
        return view('ViewsEditorial/editoriales', ['editorial' =>$editoriales]);
    }

    public function create()
    {
        return view('ViewsEditorial.create-editorial');
    }

    public function store(storeEditorial $request)
    {
        $editorial = new Editorial();
        $editorial->nom_edit = $request->nom_edit;
        $editorial->ciud_edit = $request->ciud_edit;
        $editorial->direc_edit = $request->direc_edit;
        $editorial->tel_edit = $request->tel_edit;
        $editorial->save();
        return redirect()->route('editoriales');
    }

    public function view($cod)
    {
        $editoriales = Editorial::where('id', $cod)->get();
        return view('ViewsEditorial/update-editorial', ['editorial' =>$editoriales]);
    }

    public function update(storeEditorial $request)
    {
        $editorial = Editorial::find($request->cod);
        $editorial->nom_edit = $request->nom_edit;
        $editorial->ciud_edit = $request->ciud_edit;
        $editorial->direc_edit = $request->direc_edit;
        $editorial->tel_edit = $request->tel_edit;
        $editorial->save();

        return redirect()->route('editoriales');
    }

    public function delete($cod)
    {
        //$libros = Libro::where('cod_edit_lib', $cod)->get('id');
        //$libro = Libro::find();
        //$libros->delete();
        $editorial = Editorial::find($cod);
        $editorial->delete();
        return redirect()->route('editoriales')->with('delete', 'ok');
    }
}
