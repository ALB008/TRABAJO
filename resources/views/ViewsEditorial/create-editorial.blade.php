<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Editorial</title>
</head>
<body>
    <h1>Nueva editorial</h1>
    <form action="{{route('createEditorial')}}" method="POST">

        @csrf <!--Token necesario en los formularios de laravel-->

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_edit"><br>
        <label for="city">Ciudad:</label><br>
        <input type="text" id="city" name="ciud_edit"><br>
        <label for="address">Dirección:</label><br>
        <input type="text" id="address" name="direc_edit"><br>
        <label for="phone">Telefono:</label><br>
        <input type="text" id="phone" name="tel_edit"><br>


        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('generos')}}">Regresar</a></p>
    </form>
</body>
</html>
