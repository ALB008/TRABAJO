<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Sistema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function empleados()
    {
        $empleados = Empleado::all();
        return view('ViewsEmpleado/empleados', ['empleado' =>$empleados]);
    }

    public function create()
    {
        return view('ViewsEmpleado/create-empleado');
    }

    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->id;
        $empleado->doc_emp = $request->doc_emp;
        $empleado->nom_emp = $request->nom_emp;
        $empleado->apell_emp = $request->apell_emp;
        $empleado->nacim_emp = $request->nacim_emp;
        $empleado->tel_emp = $request->nom_emp;
        $empleado->email_emp = $request->email_emp;
        $empleado->gen_emp = $request->gen_emp;
        $empleado->estud_emp = $request->estud_emp;
        $empleado->save();

        $user = new Sistema();
        $user->nom_sistem = $request->doc_emp;
        $user->contra_sistem = $request->tel_emp;
        $user->tipo_sistem = 1;
        $user->id_emp_sistem = $request->id;
        $user->save();

        return redirect()->route('empleados');
    }

    public function view($cod)
    {
        $empleados = Empleado::where('id', $cod)->get();
        return view('ViewsEmpleado/update-empleado', ['empleado' =>$empleados]);
    }

    public function update(Request $request)
    {
        $empleado = Empleado::find($request->cod);
        $empleado->doc_emp = $request->doc_emp;
        $empleado->nom_emp = $request->nom_emp;
        $empleado->apell_emp = $request->apell_emp;
        $empleado->nacim_emp = $request->nacim_emp;
        $empleado->tel_emp = $request->nom_emp;
        $empleado->email_emp = $request->email_emp;
        $empleado->gen_emp = $request->gen_emp;
        $empleado->estud_emp = $request->estud_emp;
        $empleado->save();

        return redirect()->route('empleados');
    }

    public function delete($cod)
    {
        $empleado = Empleado::find($cod);
        $empleado->delete();
        return redirect()->route('empleados');
    }
}
