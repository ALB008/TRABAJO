
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Bibliotecario</title>
    

    <div class="col-md-6 grid-margin stretch-card" style="">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Bibliotecario</h4>
        <p class="card-description">Información del Bibliotecario</p>

    <form class="forms-sample" action="{{route('updateEmpleado')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($empleado as $item){{ $item->id }}@endforeach">

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_emp" value="@foreach ($empleado as $item){{ $item->nom_emp }}@endforeach">
        <span style="color: red">
            @error('nom_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="apell">Apellido:</label><br>
        <input class="form-control" type="text" id="apell" name="apell_emp" value="@foreach ($empleado as $item){{ $item->apell_emp }}@endforeach">
        <span style="color: red">
            @error('apell_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input class="form-control" type="date" id="nacim" name="nacim_emp" value="@foreach ($empleado as $item){{ $item->nacim_emp }}@endforeach">
        <span style="color: red">
            @error('nacim_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="tel">Telefono:</label><br>
        <input class="form-control" type="text" id="tel" name="tel_emp" value="@foreach ($empleado as $item){{ $item->tel_emp }}@endforeach">
        <span style="color: red">
            @error('tel_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="email">Email:</label><br>
        <input class="form-control" type="text" id="name" name="email_emp" value="@foreach ($empleado as $item){{ $item->email_emp }}@endforeach">
        <span style="color: red">
            @error('email_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="gen">Genero:</label><br>
        <select class="form-control-sm" name="gen_emp" id="gen">
            <option value="1"@if ($item->gen_emp == 1) @selected(true) @endif>Hombre</option>
            <option value="2"@if ($item->gen_emp == 2) @selected(true) @endif>Mujer</option>
            <option value="3"@if ($item->gen_emp == 3) @selected(true) @endif>Otro</option>
        </select>
        <br><br>
        <label for="educ">Nivel educativo:</label><br>
        <input class="form-control" type="text" id="educ" name="estud_emp" value="@foreach ($empleado as $item){{ $item->estud_emp }}@endforeach">
        <span style="color: red">
            @error('estud_emp')
            {{$message}}
            @enderror
        </span> <br>


        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteEmpleado', $item->id)}}"><input class="btn btn-gradient-primary mr-2" type="submit" value="Eliminar"></a>
        <a class="btn btn-light" href="{{route('empleados')}}">Regresar</a>
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
@include('layouts.partials.footer')
