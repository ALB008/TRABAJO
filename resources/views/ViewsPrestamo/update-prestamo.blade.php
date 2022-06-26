<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestamo</title>
</head>
<body>
    <h1>Prestamo</h1>
    <form action="{{route('updatePrestamo')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($prestamo as $item){{ $item->id }}@endforeach">

        <label for="usuario">Usuario:</label><br>
        <select name="id_usu_pres" id="usuario">
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->id}}"
                    @if ($usuario->id == $item->id_usu_pres) @selected(true) @endif>
                    {{$usuario->nom_usu}}
                </option>
            @endforeach
        </select><br>
        <label for="libro">Libro:</label><br>
        <select name="isbn_lib_pres" id="libro">
            @foreach($libros as $libro)
                <option value="{{$libro->id}}"
                    @if ($libro->id == $item->isbn_lib_pres) @selected(true) @endif>
                    {{$libro->nom_lib}}
                </option>
            @endforeach
        </select><br>
        <label for="fecha">Fecha de devolución:</label><br>
        <input type="date" id="fecha" name="Fdev_pres" value="@foreach ($prestamo as $item){{ $item->Fdev_pres }}@endforeach">
        <span style="color: red"> @error('Fdev_pres')
            {{$message}}
            @enderror
        </span> <br>
        <label for="text">Estado:</label><br>
        <select name="estado_pres" id="dia">
            <option value="1"@if ($item->estado_pres == 1) @selected(true) @endif>Activo</option>
            <option value="0"@if ($item->estado_pres == 0) @selected(true) @endif>Inactivo</option>
        </select><br>



        <br>


        <input type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deletePrestamo', $item->id)}}"><input type="submit" value="Eliminar"></a>
        <p><a href="{{route('prestamos')}}">Regresar</a></p>
    </form>
</body>
</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('fdelete').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: "¿Deseas eliminar este prestamo?",
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
