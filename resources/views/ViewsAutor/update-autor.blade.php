<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autor</title>
</head>
<body>
    <h1>Autor</h1>
    <form action="{{route('updateAutor')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($autor as $item){{ $item->id }}@endforeach">

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_aut" value="@foreach ($autor as $item){{ $item->nom_aut }}@endforeach"> <br>

        <label for="name">Lugar de origen:</label><br>
        <input type="text" id="name" name="orige_aut" value="@foreach ($autor as $item){{ $item->orige_aut }}@endforeach"> <br>

        <label for="name">Estado:</label><br>
        <input type="text" id="name" name="estado_aut" value="@foreach ($autor as $item){{ $item->estado_aut }}@endforeach"> <br>



        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('autores')}}">Regresar</a></p>
    </form>
</body>
</html>
