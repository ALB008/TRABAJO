<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Género</title>
</head>
<body>
    <h1>Género literario</h1>
    <form action="{{route('updateGenero')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($genero as $item){{ $item->id }}@endforeach">

        <label for="name">Nombre del genero:</label><br>
        <input type="text" id="name" name="name" value="@foreach ($genero as $item){{ $item->nom_gen }}@endforeach">
        <span style="color: red"> @error('nom_gen')
            {{$message}}
            @enderror
        </span>
        <br> <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('generos')}}">Regresar</a></p>
    </form>
</body>
</html>
