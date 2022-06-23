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
        <input type="text" id="name" name="nom_activ">
        <span style="color: red">
            @error('nom_activ')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="dia">Día de realización:</label><br>
        <select name="dia_activ" id="dia">
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miercoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sabado</option>
        </select>

        <br>
        <label for="hora">Hora de inicio:</label><br>
        <input type="time" id="hora" name="hora_activ">
        <span style="color: red">
            @error('hora_activ')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="limite">Limite de participantes:</label><br>
        <input type="text" id="limite" name="limit_activ">
        <span style="color: red">
            @error('limit_activ')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="duracion">Duración en horas:</label><br>
        <input type="text" id="duracion" name="durac_activ">
        <span style="color: red">
            @error('durac_activ')
            {{$message}}
            @enderror
        </span>
        <br>


        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('actividades')}}">Regresar</a></p>
    </form>
</body>
</html>
