<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliotecario</title>
</head>
<body>
    <h1>Bibliotecario</h1>
    <form action="{{route('updateEmpleado')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($empleado as $item){{ $item->id }}@endforeach">


        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="nom_emp" value="@foreach ($empleado as $item){{ $item->nom_emp }}@endforeach">
        <span style="color: red">
            @error('nom_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="apell">Apellido:</label><br>
        <input type="text" id="apell" name="apell_emp" value="@foreach ($empleado as $item){{ $item->apell_emp }}@endforeach">
        <span style="color: red">
            @error('apell_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input type="date" id="nacim" name="nacim_emp" value="@foreach ($empleado as $item){{ $item->nacim_emp }}@endforeach">
        <span style="color: red">
            @error('nacim_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="tel">Telefono:</label><br>
        <input type="text" id="tel" name="tel_emp" value="@foreach ($empleado as $item){{ $item->tel_emp }}@endforeach">
        <span style="color: red">
            @error('tel_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="email">Email:</label><br>
        <input type="text" id="name" name="email_emp" value="@foreach ($empleado as $item){{ $item->email_emp }}@endforeach">
        <span style="color: red">
            @error('email_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="gen">Genero:</label><br>
        <select name="gen_emp" id="gen">
            <option value="1"@if ($item->gen_emp == 1) @selected(true) @endif>Hombre</option>
            <option value="2"@if ($item->gen_emp == 2) @selected(true) @endif>Mujer</option>
            <option value="3"@if ($item->gen_emp == 3) @selected(true) @endif>Otro</option>
        </select>
        <br>
        <label for="educ">Nivel educativo:</label><br>
        <input type="text" id="educ" name="estud_emp" value="@foreach ($empleado as $item){{ $item->estud_emp }}@endforeach">
        <span style="color: red">
            @error('estud_emp')
            {{$message}}
            @enderror
        </span> <br>


        <br>
        <input type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteEmpleado', $item->id)}}"><input type="submit" value="Eliminar"></a>
        <p><a href="{{route('empleados')}}">Regresar</a></p>
    </form>
</body>
</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('fdelete').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: "¿Deseas eliminar a este bibliotecario?",
            text: "Se eliminará de forma permanente",
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
