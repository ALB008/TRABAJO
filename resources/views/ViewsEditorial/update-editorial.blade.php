<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>
    <h1>Editorial</h1>
    <form action="{{route('updateEditorial')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($editorial as $item){{ $item->id }}@endforeach">

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_edit" value="@foreach ($editorial as $item){{ $item->nom_edit }}@endforeach">
        <span style="color: red">
            @error('nom_edit')
            {{$message}}
            @enderror
        </span><br>
        <label for="city">Ciudad:</label><br>
        <input type="text" id="city" name="ciud_edit" value="@foreach ($editorial as $item){{ $item->ciud_edit }}@endforeach">
        <span style="color: red">
            @error('ciud_edit')
            {{$message}}
            @enderror
        </span> <br>
        <label for="address">Dirección:</label><br>
        <input type="text" id="address" name="direc_edit" value="@foreach ($editorial as $item){{ $item->direc_edit }}@endforeach"> <span style="color: red">
            @error('direc_edit')
            {{$message}}
            @enderror
        </span><br>
        <label for="phone">Telefono:</label><br>
        <input type="text" id="phone" name="tel_edit" value="@foreach ($editorial as $item){{ $item->tel_edit }}@endforeach">
        <span style="color: red">
            @error('tel_edit')
            {{$message}}
            @enderror
        </span> <br>


        <br>
        <input type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteEditorial', $item->id)}}"><input type="submit" value="Eliminar"></a>
        <p><a href="{{route('editoriales')}}">Regresar</a></p>
    </form>
</body>
</html>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('fdelete').addEventListener('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Deseas eliminar esta editorial?",
                text: "También se eliminaran todos los libros de la editorial",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, estoy seguro!',
                cancelButtonText: 'No, cancelar!'
                }).then((result) => {
                if (result.isConfirmed) {
                   window.location = this.href;
                }
            })
                    });

</script>

