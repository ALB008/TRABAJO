<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarios()
    {
        $usuarios = Usuario::all();
        return view('ViewsUsuario/usuarios', ['usuario' =>$usuarios]);
    }

    public function create()
    {
        return view('ViewsUsuario.create-usuario');
    }

    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->doc_usu = $request->doc_usu;
        $usuario->nom_usu = $request->nom_usu;
        $usuario->apell_usu = $request->apell_usu;
        $usuario->nacim_usu = $request->nacim_usu;
        $usuario->tel_usu = $request->tel_usu;
        $usuario->email_usu = $request->email_usu;
        $usuario->gen_usu = $request->gen_usu;
        $usuario->id_emp_usu = $request->id_emp_usu;
        $usuario->save();

        return redirect()->route('usuarios');
    }

    public function view($cod)
    {
        $usuarios = Usuario::where('id', $cod)->get();
        return view('ViewsUsuario/update-usuario', ['usuario' =>$usuarios]);
    }

    public function update(Request $request)
    {
        $usuario = Usuario::find($request->cod);
        $usuario->doc_usu = $request->doc_usu;
        $usuario->nom_usu = $request->nom_usu;
        $usuario->apell_usu = $request->apell_usu;
        $usuario->nacim_usu = $request->nacim_usu;
        $usuario->tel_usu = $request->tel_usu;
        $usuario->email_usu = $request->email_usu;
        $usuario->gen_usu = $request->gen_usu;
        $usuario->id_emp_usu = $request->id_emp_usu;
        $usuario->save();

        return redirect()->route('usuarios');
    }

    public function delete($cod)
    {
        $usuario = Usuario::find($cod);
        $usuario->delete();
        return redirect()->route('usuarios');
    }
}
