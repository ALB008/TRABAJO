<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Libro</title>
</head>
<body>
    <h1>Nuevo libro</h1>
    <form action="{{route('createLibro')}}" method="POST">

        @csrf

        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn_lib"> <br>
        <label for="codigo">Código:</label><br>
        <input type="text" id="codigo" name="cod_lib"> <br>
        <label for="titulo">Titulo:</label><br>
        <input type="text" id="titulo" name="nom_lib"> <br>
        <label for="año">Año de publicación:</label><br>
        <input type="text" id="año" name="anno_lib"> <br>
        <label for="paginas">Cantidad de páginas:</label><br>
        <input type="text" id="paginas" name="pag_lib"> <br>
        <label for="editorial">Editorial:</label><br>
        <input type="text" id="editorial" name="cod_edit_lib"> <br>



        <br>
        <input type="submit" value="Enviar">
        <p><a href="{{route('libros')}}">Regresar</a></p>
    </form>
</body>
</html>
