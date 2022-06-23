<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\storeAutor;


class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autores()
    {
        $autores = Autor::all();
        return view('ViewsAutor/autores', ['autor' =>$autores]);
    }

    public function create()
    {
        return view('ViewsAutor.create-autor');
    }

    public function store(storeAutor $request)
    {
        $autor = new Autor;
        $autor->nom_aut = $request->nom_aut;
        $autor->orige_aut = $request->orige_aut;
        $autor->estado_aut = $request->estado_aut;
        $autor->save();

        return redirect()->route('autores');
    }

    public function view($cod)
    {
        $autores = Autor::where('id', $cod)->get();
        return view('ViewsAutor/update-autor', ['autor' =>$autores]);
    }

    public function update(storeAutor $request)
    {
        $autor = Autor::find($request->cod);
        $autor->nom_aut = $request->nom_aut;
        $autor->orige_aut = $request->orige_aut;
        $autor->estado_aut = $request->estado_aut;

        $autor->save();

        return redirect()->route('autores');
    }

    public function delete($cod)
    {
        $autor = Autor::find($cod);
        $autor->delete();
        return redirect()->route('autores');
    }
}
