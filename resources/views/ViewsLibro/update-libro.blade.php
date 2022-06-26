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
        <input type="text" id="isbn" name="isbn_lib" value="@foreach ($libro as $item){{ $item->isbn_lib }}@endforeach">
        <span style="color: red"> @error('isbn_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="codigo">Código:</label><br>
        <input type="text" id="codigo" name="cod_lib" value="@foreach ($libro as $item){{ $item->cod_lib }}@endforeach">
        <span style="color: red"> @error('cod_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="titulo">Titulo:</label><br>
        <input type="text" id="titulo" name="nom_lib" value="@foreach ($libro as $item){{ $item->nom_lib }}@endforeach">
        <span style="color: red"> @error('nom_lib')
            {{$message}}
            @enderror
        </span>  <br>
        <label for="año">Año de publicación:</label><br>
        <input type="text" id="año" name="anno_lib" value="@foreach ($libro as $item){{ $item->anno_lib }}@endforeach">
        <span style="color: red"> @error('anno_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="paginas">Cantidad de páginas:</label><br>
        <input type="text" id="paginas" name="pag_lib" value="@foreach ($libro as $item){{ $item->pag_lib }}@endforeach">
        <span style="color: red"> @error('pag_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="editorial">Editorial:</label><br>
        <select name="cod_edit_lib" id="editorial">
            @foreach($editoriales as $editorial)
                <option value="{{$editorial->id}}"
                    @if ($editorial->id == $item->cod_edit_lib) @selected(true) @endif>
                    {{$editorial->nom_edit}}
                </option>
            @endforeach
        </select>



        <br>
        <input type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteLibro', $item->id)}}"><input type="submit" value="Eliminar"></a>
        <p><a href="{{route('libros')}}">Regresar</a></p>
    </form>
</body>
</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('fdelete').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: "¿Deseas eliminar este libro",
            text: "Se eliminara de forma permanente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminarlo!',
            cancelButtonText: 'No, cancelar!'
            }).then((result) => {
                if (result.isConfirmed) {
                window.location = this.href;
                }
            })
        });
</script>
