<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Autor</title>
</head>
<body>
    <h1>Nuevo autor</h1>
    <form action="{{route('createAutor')}}" method="POST">

        @csrf

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_aut"> <br>
        <label for="origen">Lugar de Origen:</label><br>
        <input type="text" id="origen" name="orige_aut"> <br>
        <label for="estado">Estado:</label><br>
        <input type="text" id="estado" name="estado_aut"> <br>

        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('autores')}}">Regresar</a></p>
    </form>
</body>
</html>
