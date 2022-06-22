<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliotecario</title>
</head>
<body>
    <h1>Bibliotecario</h1>
    <form action="{{route('updateEmpleado')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($empleado as $item){{ $item->id }}@endforeach">

        <label for="doc">N° Documento:</label><br>
        <input type="text" id="doc" name="doc_emp" value="@foreach ($empleado as $item){{ $item->doc_emp }}@endforeach"> <br>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_emp" value="@foreach ($empleado as $item){{ $item->nom_emp }}@endforeach"> <br>
        <label for="apell">Apellido:</label><br>
        <input type="text" id="apell" name="apell_emp" value="@foreach ($empleado as $item){{ $item->apell_emp }}@endforeach"> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input type="text" id="nacim" name="nacim_emp" value="@foreach ($empleado as $item){{ $item->nacim_emp }}@endforeach"> <br>
        <label for="tel">Telefono:</label><br>
        <input type="text" id="tel" name="tel_emp" value="@foreach ($empleado as $item){{ $item->tel_emp }}@endforeach"> <br>
        <label for="email">Email:</label><br>
        <input type="text" id="name" name="email_emp" value="@foreach ($empleado as $item){{ $item->email_emp }}@endforeach"> <br>
        <label for="gen">Genero:</label><br>
        <select name="gen_emp" id="gen">
            <option value="1"@if ($item->gen_emp == 1) @selected(true) @endif>Hombre</option>
            <option value="2"@if ($item->gen_emp == 2) @selected(true) @endif>Mujer</option>
            <option value="3"@if ($item->gen_emp == 3) @selected(true) @endif>Otro</option>
        </select>
        <br>
        <label for="educ">Nivel educativo:</label><br>
        <input type="text" id="educ" name="estud_emp" value="@foreach ($empleado as $item){{ $item->estud_emp }}@endforeach"> <br>


        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('empleados')}}">Regresar</a></p>
    </form>
</body>
</html>
