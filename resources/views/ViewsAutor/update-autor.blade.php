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
        <input type="text" id="name" name="nom_aut" value="@foreach ($autor as $item){{ $item->nom_aut }}@endforeach">
        <span style="color: red">
            @error('nom_aut')
            {{$message}}
            @enderror
        </span> <br>

        <label for="origen">Pais de origen:</label><br>
        <input type="text" id="orige" name="orige_aut" value="@foreach ($autor as $item){{ $item->orige_aut }}@endforeach">
        <span style="color: red">
            @error('orige_aut')
            {{$message}}
            @enderror
        </span> <br>

        <label for="estado">Estado:</label><br>
        <select name="estado_aut" id="estado">
            <option value="1"@if ($item->estado_aut == 1) @selected(true) @endif>Vivo</option>
            <option value="0"@if ($item->estado_aut == 0) @selected(true) @endif>Muerto</option>
        </select>


        <br>
        <input type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteAutor', $item->id)}}"><input type="submit" value="Eliminar"></a>
        <p><a href="{{route('autores')}}">Regresar</a></p>
    </form>
</body>
</html>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('fdelete').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title:"¿Deseas eliminar a este autor",
            text: "También eliminaras los libros en los que ha trabajado",
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

