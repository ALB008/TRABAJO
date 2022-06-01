<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin(){
        return view('admin');
    }

    public function books(){
        return view('Books');
    }

    public function users(){
        return view('Users');
    }
}


//return view('name_view', ['variable_vista'=>$variable_controlador]).
//Now() = para fecha y hora.
