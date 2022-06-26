<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\storePrestamo;

class PrestamoController extends Controller
{

    public function prestamos()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        $prestamos = Prestamo::all();
        return view('ViewsPrestamo.prestamos', ['prestamo' => $prestamos, 'usuarios' => $usuarios, 'libros' => $libros]);
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('ViewsPrestamo.create-prestamo', ['usuarios' => $usuarios, 'libros' => $libros]);
    }

    public function store(storePrestamo $request)
    {
        $prestamo = new Prestamo();
        $prestamo->id_usu_pres = $request->id_usu_pres;
        $prestamo->isbn_lib_pres = $request->isbn_lib_pres;
        $prestamo->Fpres_pres = $request->Fpres_pres;
        $prestamo->Fdev_pres = $request->Fdev_pres;
        $prestamo->estado_pres = 1;
        $prestamo->save();

        return redirect()->route('prestamos');
    }

    public function view($cod)
    {
        $prestamos = Prestamo::where('id', $cod)->get();
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('ViewsPrestamo/update-prestamo', ['prestamo' =>$prestamos, 'usuarios' => $usuarios, 'libros' => $libros]);
    }

    public function update(storePrestamo $request)
    {
        $prestamo = Prestamo::find($request->cod);
        $prestamo->id_usu_pres = $request->id_usu_pres;
        $prestamo->isbn_lib_pres = $request->isbn_lib_pres;
        $prestamo->Fdev_pres = $request->Fdev_pres;
        $prestamo->estado_pres = $request->estado_pres;
        $prestamo->save();

        return redirect()->route('prestamos');
    }

    public function delete($cod)
    {
        $prestamo = Prestamo::find($cod);
        $prestamo->delete();
        return redirect()->route('prestamos')->with('delete', 'ok');
    }
}
