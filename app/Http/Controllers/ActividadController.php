<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\storeActividad;

class ActividadController extends Controller
{
    public function actividades()
    {
        $actividades = Actividad::all();
        return view('ViewsActividad/actividades', ['actividad' =>$actividades]);
    }

    public function create()
    {
        return view('ViewsActividad.create-actividad');
    }

    public function store(storeActividad $request)
    {
        $actividad = new ACtividad;
        $actividad->nom_activ = $request->nom_activ;
        $actividad->dia_activ = $request->dia_activ;
        $actividad->hora_activ = $request->hora_activ;
        $actividad->limit_activ = $request->limit_activ;
        $actividad->durac_activ = $request->durac_activ;

        $actividad->save();
        return redirect()->route('actividades');
    }

    public function view($cod)
    {
        $actividades = Actividad::where('id', $cod)->get();
        return view('ViewsActividad/update-actividad', ['actividad' =>$actividades]);
    }

    public function update(storeActividad $request)
    {
        $actividad = Actividad::find($request->cod);
        $actividad->nom_activ = $request->nom_activ;
        $actividad->dia_activ = $request->dia_activ;
        $actividad->hora_activ = $request->hora_activ;
        $actividad->limit_activ = $request->limit_activ;
        $actividad->durac_activ = $request->durac_activ;

        $actividad->save();

        return redirect()->route('actividades');
    }

    public function delete($cod)
    {
        $actividad = Actividad::find($cod);
        $actividad->delete();
        return redirect()->route('actividades')->with('delete', 'ok');
    }
}
