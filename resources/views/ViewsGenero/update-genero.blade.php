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
        <input type="text" id="name" name="nom_gen"  value="@foreach ($genero as $item){{ $item->nom_gen }}@endforeach">

        <span style="color: red"> @error('nom_gen')
            {{$message}}
            @enderror
        </span>
        <br> <br>
        <input type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteGenero', $item->id)}}"><input type="submit" value="Eliminar"></a>
        <p><a href="{{route('generos')}}">Regresar</a></p>
    </form>
</body>
</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('fdelete').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: "¿Deseas eliminar este género?",
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

