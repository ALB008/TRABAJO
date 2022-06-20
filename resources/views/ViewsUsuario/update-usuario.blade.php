<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>Usuario</h1>
    <form action="{{route('updateUsuario')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($usuario as $item){{ $item->id }}@endforeach">
        <input type="hidden" id="name" name="id_emp_usu" value="3"> <br>


        <label for="doc">Documento:</label><br>
        <input type="text" id="doc" name="doc_usu" value="@foreach ($usuario as $item){{ $item->doc_usu }}@endforeach"> <br>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_usu" value="@foreach ($usuario as $item){{ $item->nom_usu }}@endforeach"> <br>
        <label for="apell">Apellido:</label><br>
        <input type="text" id="apell" name="apell_usu" value="@foreach ($usuario as $item){{ $item->apell_usu }}@endforeach"> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input type="text" id="nacim" name="nacim_usu" value="@foreach ($usuario as $item){{ $item->nacim_usu }}@endforeach"> <br>
        <label for="telefon">Telefono:</label><br>
        <input type="text" id="telefon" name="tel_usu" value="@foreach ($usuario as $item){{ $item->tel_usu }}@endforeach"> <br>
        <label for="mail">Email:</label><br>
        <input type="text" id="mail" name="email_usu" value="@foreach ($usuario as $item){{ $item->email_usu }}@endforeach"> <br>
        <label for="genero">Genero:</label><br>
        <input type="text" id="genero" name="gen_usu" value="@foreach ($usuario as $item){{ $item->gen_usu }}@endforeach"> <br>




        <input type="submit" value="Enviar">
        <p><a href="{{route('usuarios')}}">Regresar</a></p>
    </form>
</body>
</html>
