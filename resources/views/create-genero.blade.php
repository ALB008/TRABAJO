<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Genero</title>
</head>
<body>
    <h1>Nuevo género literario</h1>
    <form action="{{route('createGenero')}}" method="POST">

        @csrf <!--Token necesario en los formularios de laravel-->

        <label for="name">Nombre del genero:</label><br>
        <input type="text" id="name" name="nom_gen"> <br> <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('generos')}}">Regresar</a></p>
    </form>
</body>
</html>

<!--
    15
    Menu de opciones desde la base de datos
    1) En el controlador "Libro" importar el modelo "Editorial"
    2) En la funcion "create"
    $editoriales = Editorial::all();
    return view('libro-create', ['editoriales'=>$editoriales]);
    3) En la vista hacer un foreach

        <select name="editorial" id="">
            @ foreach($editoriales as $editorial)
            <option value="{ { $editorial->cod_edit }}">{ {$editorial->nom_edit}}</option>
            @ endforeach
        </select>


-->

