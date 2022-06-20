<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libro</title>
</head>
<body>
    <h1>libro</h1>
    <form action="{{route('updateLibro')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($libro as $item){{ $item->id }}@endforeach">

        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn_lib" value="@foreach ($libro as $item){{ $item->isbn_lib }}@endforeach"> <br>
        <label for="codigo">Código:</label><br>
        <input type="text" id="codigo" name="cod_lib" value="@foreach ($libro as $item){{ $item->cod_lib }}@endforeach"> <br>
        <label for="titulo">Titulo:</label><br>
        <input type="text" id="titulo" name="nom_lib" value="@foreach ($libro as $item){{ $item->nom_lib }}@endforeach">  <br>
        <label for="año">Año de publicación:</label><br>
        <input type="text" id="año" name="anno_lib" value="@foreach ($libro as $item){{ $item->anno_lib }}@endforeach"> <br>
        <label for="paginas">Cantidad de páginas:</label><br>
        <input type="text" id="paginas" name="pag_lib" value="@foreach ($libro as $item){{ $item->pag_lib }}@endforeach"> <br>
        <label for="editorial">Editorial:</label><br>
        <input type="text" id="editorial" name="cod_edit_lib" value="@foreach ($libro as $item){{ $item->cod_edit_lib }}@endforeach"> <br>



        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('libros')}}">Regresar</a></p>
    </form>
</body>
</html>
