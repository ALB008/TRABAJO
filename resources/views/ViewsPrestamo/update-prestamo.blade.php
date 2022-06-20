<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestamo</title>
</head>
<body>
    <h1>Prestamo</h1>
    <form action="{{route('updatePrestamo')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($prestamo as $item){{ $item->id }}@endforeach">

        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="id_usu_pres" value="@foreach ($prestamo as $item){{ $item->id_usu_pres }}@endforeach"> <br>
        <label for="libro">Libro:</label><br>
        <input type="text" id="libro" name="isbn_lib_pres" value="@foreach ($prestamo as $item){{ $item->isbn_lib_pres }}@endforeach"> <br>
        <label for="fecha">Fecha de devolución:</label><br>
        <input type="date" id="fecha" name="Fdev_pres" value="@foreach ($prestamo as $item){{ $item->Fdev_pres }}@endforeach"> <br>
        <label for="text">Estado:</label><br>
        <input type="text" id="name" name="estado_pres" value="@foreach ($prestamo as $item){{ $item->estado_pres }}@endforeach"> <br>



        <br>


        <input type="submit" value="Enviar">
        <p><a href="{{route('prestamos')}}">Regresar</a></p>
    </form>
</body>
</html>
