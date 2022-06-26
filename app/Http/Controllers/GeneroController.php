<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\storeGenero;

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

    public function store(storeGenero $request)
    {
        //$request->validate([
        //    'nom_gen'=>'required'
        //]);

        $genero = new Genero;
        $genero->nom_gen = $request->nom_gen;
        $genero->save();
        return redirect()->route('generos');

        //Otra forma
        //Genero::create([
          //  'nom_gen'=>$request->nom_gen,
            //todos los campos
            //NECESARIO: En el modelo agregar los campos de la tabla
            //protected $fillable = ['campo1', 'campo2']; - en el modelo
        //]);

        //ASIGNACIÓN MASIVA - para muchos campos
        //Los campos deben ser IGUALES en la form y db
        //En el modelo - protected $guarded = ['token'] - para que no lea el token
        //Genero::create($request->all());

    }


    public function view($cod)
    {
        $generos = Genero::where('id', $cod)->get();//find: encuentra la "id"
        return view('ViewsGenero/update-genero', ['genero' =>$generos]);
    }

    public function update(storeGenero $request)
    {
        $genero = Genero::find($request->cod);
        //todos lo campos
        $genero->nom_gen = $request->nom_gen;
        $genero->save();

        return redirect()->route('generos');
    }

    public function delete($cod)
    {
        $genero = Genero::find($cod);
        $genero->delete();
        return redirect()->route('generos')->with('delete', 'ok');
    }
}
?>

