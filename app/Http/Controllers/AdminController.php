<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class AdminController extends Controller
{

    public function admin(){
        return view('admin');
    }

    public function libros(){
        return view('Book');
    }

    public function usuarios(){
        return view('User');
    }
    public function generos(){
        $generos = Genero::all();
        return view('generos', ['genero' =>$generos]);
    }
}


//return view('name_view', ['variable_vista'=>$variable_controlador]).
//Now() = para fecha y hora.
//dd($generos);
