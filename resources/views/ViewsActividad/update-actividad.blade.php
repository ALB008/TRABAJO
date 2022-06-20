<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividad</title>
</head>
<body>
    <h1>Actividad recreativa</h1>
    <form action="{{route('updateActividad')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($actividad as $item){{ $item->id }}@endforeach">

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_activ" value="@foreach ($actividad as $item){{ $item->nom_activ }}@endforeach"> <br>

        <label for="dia">Día de realización:</label><br>
        <input type="text" id="dia" name="dia_activ" value="@foreach ($actividad as $item){{ $item->dia_activ }}@endforeach"> <br>

        <label for="hora">Hora:</label><br>
        <input type="time" id="hora" name="hora_activ" value="@foreach ($actividad as $item){{ $item->hora_activ }}@endforeach"> <br>

        <label for="limite">Limite de participantes:</label><br>
        <input type="text" id="limite" name="limit_activ" value="@foreach ($actividad as $item){{ $item->limit_activ }}@endforeach"><br>

        <label for="duracion">Duración:</label><br>
        <input type="text" id="duracion" name="durac_activ" value="@foreach ($actividad as $item){{ $item->durac_activ }}@endforeach"> <br>


        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('actividades')}}">Regresar</a></p>
    </form>
</body>
</html>
