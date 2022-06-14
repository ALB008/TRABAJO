<?php

namespace App\Http\Controllers;

use App\Models\genero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generos()
    {
        $generos = Genero::all();//orderBY('nom')->get
        return view('generos', ['genero' =>$generos]);

    }

    public function create()
    {
        return view('create-genero');
    }


    public function store(Request $request)
    {
        $genero = new Genero;
        $genero->nom_gen = $request->nom_gen;
        $genero->save();
        return redirect()->route('generos');
    }


    public function view($cod)
    {
        $generos = Genero::find(); //where($cod = 'cod_gen');//find: encuentra la id
        return view('update-genero', ['genero' =>$generos]);
    }


    public function edit(genero $genero)
    {
        //
    }
    public function update(Request $request, genero $genero)
    {
        //
    }

    public function destroy(genero $genero)
    {
        //
    }
}
