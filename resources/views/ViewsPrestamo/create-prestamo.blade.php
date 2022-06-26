<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Prestamo</title>
</head>
<body>
    <h1>Nuevo prestamo</h1>
    <form action="{{route('createPrestamo')}}" method="POST">

        @csrf

        <label for="usuario">Usuario:</label><br>
        <select name="id_usu_pres" id="usuario">
            @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nom_usu}}</option>
            @endforeach
        </select><br>
        <label for="libro">Libro:</label><br>
        <select name="isbn_lib_pres" id="libro">
            @foreach($libros as $libro)
            <option value="{{$libro->id}}">{{$libro->nom_lib}}</option>
            @endforeach
        </select> <br>
        <label for="fecha">Fecha de devolución:</label><br>
        <input type="date" id="fecha" name="Fdev_pres"> <br>
        <span style="color: red"> @error('Fdev_pres')
            {{$message}}
            @enderror
        </span>

        <input type="hidden" type="datetime" name="Fpres_pres"  value="<?php echo date("Y-m-d");?>">
        <input type="hidden" type="text" value="1">

        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('prestamos')}}">Regresar</a></p>
    </form>
</body>
</html>
