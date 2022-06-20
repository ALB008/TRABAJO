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
        <input type="text" id="usuario" name="id_usu_pres"> <br>
        <label for="libro">Libro:</label><br>
        <input type="text" id="libro" name="isbn_lib_pres"> <br>
        <label for="fecha">Fecha de devolución:</label><br>
        <input type="date" id="fecha" name="Fdev_pres"> <br>

        <input type="hidden" type="datetime" name="Fpres_pres"  value="<?php echo date("Y-m-d");?>">
        <input type="hidden" type="text" value="1">

        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('prestamos')}}">Regresar</a></p>
    </form>
</body>
</html>
