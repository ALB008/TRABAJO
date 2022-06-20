<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Bibliotecario</title>
</head>
<body>
    <h1>Nuevo bibliotecario</h1>
    <form action="{{route('createEmpleado')}}" method="POST">

        @csrf

        <label for="doc">N° Documento:</label><br>
        <input type="text" id="doc" name="doc_emp"> <br>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_emp"> <br>
        <label for="apell">Apellido:</label><br>
        <input type="text" id="apell" name="apell_emp"> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input type="date" id="nacim" name="nacim_emp"> <br>
        <label for="tel">Telefono:</label><br>
        <input type="text" id="tel" name="tel_emp"> <br>
        <label for="email">Email:</label><br>
        <input type="text" id="name" name="email_emp"> <br>
        <label for="gen">Genero:</label><br>
        <input type="text" id="gen" name="gen_emp"> <br>
        <label for="educ">Nivel educativo:</label><br>
        <input type="text" id="educ" name="estud_emp"> <br>



        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('empleados')}}">Regresar</a></p>
    </form>
</body>
</html>
