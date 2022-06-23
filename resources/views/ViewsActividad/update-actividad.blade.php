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
        <input type="text" id="name" name="nom_activ" value="@foreach ($actividad as $item){{ $item->nom_activ }}@endforeach">
        <span style="color: red">
            @error('nom_activ')
            {{$message}}
            @enderror
        </span>

        <br>

        <label for="dia">Día de realización:</label><br>
        <select name="dia_activ" id="dia">
            <option value="1"@if ($item->dia_activ == 1) @selected(true) @endif>Lunes</option>
            <option value="2"@if ($item->dia_activ == 2) @selected(true) @endif>Martes</option>
            <option value="3"@if ($item->dia_activ == 3) @selected(true) @endif>Miercoles</option>
            <option value="4"@if ($item->dia_activ == 4) @selected(true) @endif>Jueves</option>
            <option value="5"@if ($item->dia_activ == 5) @selected(true) @endif>Viernes</option>
            <option value="6"@if ($item->dia_activ == 6) @selected(true) @endif>Sabado</option>
        </select>
        <br>

        <label for="hora">Hora de inicio:</label><br>
        <input type="time" id="hora" name="hora_activ" value="@foreach ($actividad as $item){{ $item->hora_activ }}@endforeach">
        <span style="color: red">
            @error('hora_activ')
            {{$message}}
            @enderror
        </span> <br>

        <label for="limite">Limite de participantes:</label><br>
        <input type="text" id="limite" name="limit_activ" value="@foreach ($actividad as $item){{ $item->limit_activ }}@endforeach">
        <span style="color: red">
            @error('limit_activ')
            {{$message}}
            @enderror
        </span><br>

        <label for="duracion">Duración en horas:</label><br>
        <input type="text" id="duracion" name="durac_activ" value="@foreach ($actividad as $item){{ $item->durac_activ }}@endforeach">
        <span style="color: red">
            @error('durac_activ')
            {{$message}}
            @enderror
        </span> <br>


        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('actividades')}}">Regresar</a></p>
    </form>
</body>
</html>
