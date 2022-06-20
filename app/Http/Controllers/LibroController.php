<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function libros()
    {
        $libros = Libro::all();
        return view('ViewsLibro/libros', ['libro' =>$libros]);
    }

    public function create()
    {
        return view('ViewsLibro.create-libro');
    }

    public function store(Request $request)
    {
        $libro = new Libro;
        $libro->isbn_lib = $request->isbn_lib;
        $libro->cod_lib = $request->cod_lib;
        $libro->nom_lib = $request->nom_lib;
        $libro->estado_lib = 1;
        $libro->anno_lib = $request->anno_lib;
        $libro->pag_lib = $request->pag_lib;
        $libro->cod_edit_lib = $request->cod_edit_lib;
        $libro->save();
        return redirect()->route('libros');
    }

    public function view($cod)
    {
        $libros = Libro::where('id', $cod)->get();
        return view('ViewsLibro/update-libro', ['libro' =>$libros]);
    }

    public function update(Request $request)
    {
        $libro = Libro::find($request->cod);
        $libro->isbn_lib = $request->isbn_lib;
        $libro->cod_lib = $request->cod_lib;
        $libro->nom_lib = $request->nom_lib;
        $libro->estado_lib = 1;
        $libro->anno_lib = $request->anno_lib;
        $libro->pag_lib = $request->pag_lib;
        $libro->cod_edit_lib = $request->cod_edit_lib;
        $libro->save();

        return redirect()->route('libros');
    }

    public function delete($cod)
    {
        $libro = Libro::find($cod);
        $libro->delete();
        return redirect()->route('libros');
    }
}
