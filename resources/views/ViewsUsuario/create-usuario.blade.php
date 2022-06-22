<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Usuario</title>
</head>
<body>
    <h1>Nuevo usuario</h1>
    <form action="{{route('createUsuario')}}" method="POST">

        @csrf

        <label for="doc">Documento:</label><br>
        <input type="text" id="doc" name="doc_usu"> <br>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_usu"> <br>
        <label for="apell">Apellido:</label><br>
        <input type="text" id="apell" name="apell_usu"> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input type="date" id="nacim" name="nacim_usu"> <br>
        <label for="telefon">Telefono:</label><br>
        <input type="text" id="telefon" name="tel_usu"> <br>
        <label for="mail">Email:</label><br>
        <input type="text" id="mail" name="email_usu"> <br>
        <label for="genero">Genero:</label><br>
        <select name="gen_usu" id="gen">
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
            <option value="3">Otro</option>
        </select>

        <input type="hidden" id="name" name="id_emp_usu" value="3"> <br>






        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('usuarios')}}">Regresar</a></p>
    </form>
</body>
</html>
