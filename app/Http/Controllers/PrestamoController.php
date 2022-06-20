<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{

    public function prestamos()
    {
        $prestamos = Prestamo::all();
        return view('ViewsPrestamo.prestamos', ['prestamo' => $prestamos]);
    }

    public function create()
    {
        return view('ViewsPrestamo.create-prestamo');
    }

    public function store(Request $request)
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
        return view('ViewsPrestamo/update-prestamo', ['prestamo' =>$prestamos]);
    }

    public function update(Request $request)
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
        return redirect()->route('prestamos');
    }
}
