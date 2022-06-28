
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Nuevo Genero</title>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Nuevo Genero literario</h4>
        <p class="card-description">Información del genero </p>

    <form action="{{route('createGenero')}}" method="POST">

        @csrf <!--Token necesario en los formularios de laravel/Para seguridad-->

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_gen">
        <br>
        <span style="color: red">
            @error('nom_gen')
            {{$message}}
            @enderror
        </span>
        <br> <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Registrar">
        <a class="btn btn-light" href="{{route('generos')}}">Regresar</a>
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


        Para seleccionar min 29 - cap 14


-->

@include('layouts.partials.footer')
