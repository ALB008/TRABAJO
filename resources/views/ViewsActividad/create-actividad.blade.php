<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Actividad</title>
</head>
<body>
    <h1>Nueva actividad recreativa</h1>
    <form action="{{route('createActividad')}}" method="POST">

        @csrf

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_activ"> <br>
        <label for="dia">Día de realización:</label><br>
        <input type="text" id="dia" name="dia_activ"> <br>
        <label for="hora">Hora:</label><br>
        <input type="text" id="hora" name="hora_activ"> <br>
        <label for="limite">Limite de participantes:</label><br>
        <input type="text" id="limite" name="limit_activ"> <br>
        <label for="duracion">Duración:</label><br>
        <input type="text" id="duracion" name="durac_activ"> <br>


        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('actividades')}}">Regresar</a></p>
    </form>
</body>
</html>
