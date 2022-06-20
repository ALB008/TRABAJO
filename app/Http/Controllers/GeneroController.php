<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function generos()
    {
        $generos = Genero::all();//orderBY('nom')->get
        return view('ViewsGenero/generos', ['genero' =>$generos]);
    }

    public function create()
    {
        return view('ViewsGenero/create-genero');
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
        $generos = Genero::where('id', $cod)->get();//find: encuentra la "id"
        return view('ViewsGenero/update-genero', ['genero' =>$generos]);
    }

    public function update(Request $request)
    {
        $genero = Genero::find($request->cod);
        //todos lo campos
        $genero->nom_gen = $request->name;
        $genero->save();

        return redirect()->route('generos');
    }

    public function delete($cod)
    {
        $genero = Genero::find($cod);
        $genero->delete();
        return redirect()->route('generos');
    }
}