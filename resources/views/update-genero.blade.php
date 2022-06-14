<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Genero</title>
</head>
<body>
    <h1>Género literario</h1>
    <form action="{{route('updateGenero')}}" method="POST">

        @csrf <!--Token necesario en los formularios de laravel-->

        <label for="name">Nombre del genero:</label><br>
        <input type="text" id="name" name="nom_gen" value="{{$genero->nom_gen}}"> <br> <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('generos')}}">Regresar</a></p>
    </form>
</body>
</html>
