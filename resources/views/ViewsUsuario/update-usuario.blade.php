
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Usuario</title>
    <div class="col-md-6 grid-margin stretch-card" style="">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Usuario</h4>
        <p class="card-description">Información del Usuario</p>
    <form class="forms-sample" action="{{route('updateUsuario')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($usuario as $item){{ $item->id }}@endforeach">

        <input type="hidden" name="id_emp_usu" value="@foreach ($usuario as $item){{ $item->id_emp_usu }}@endforeach"> <br>

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_usu" value="@foreach ($usuario as $item){{ $item->nom_usu }}@endforeach">
        <span style="color: red"> @error('nom_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="apell">Apellido:</label><br>
        <input class="form-control" type="text" id="apell" name="apell_usu" value="@foreach ($usuario as $item){{ $item->apell_usu }}@endforeach">
        <span style="color: red"> @error('apell_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input class="form-control" type="date" id="nacim" name="nacim_usu" value="@foreach ($usuario as $item){{ $item->nacim_usu }}@endforeach">
        <span style="color: red"> @error('nacim_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="telefon">Telefono:</label><br>
        <input class="form-control" type="text" id="telefon" name="tel_usu" value="@foreach ($usuario as $item){{ $item->tel_usu }}@endforeach">
        <span style="color: red"> @error('tel_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="mail">Email:</label><br>
        <input class="form-control" type="text" id="mail" name="email_usu" value="@foreach ($usuario as $item){{ $item->email_usu }}@endforeach">
        <span style="color: red"> @error('email_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="genero">Genero:</label><br>
        <select class="form-control-sm" name="gen_usu" id="gen">
            <option value="1"@if ($item->gen_usu == 1) @selected(true) @endif>Hombre</option>
            <option value="2"@if ($item->gen_usu == 2) @selected(true) @endif>Mujer</option>
            <option value="3"@if ($item->gen_usu == 3) @selected(true) @endif>Otro</option>
        </select>


        <br>
        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteUsuario', $item->id)}}"><input class="btn btn-gradient-primary mr-2" type="submit" value="Eliminar"></a>
        <a class="btn btn-light" href="{{route('usuarios')}}">Regresar</a>
    </form>
</body>
</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('fdelete').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: "¿Deseas eliminar a este usuario?",
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
@include('layouts.partials.footer')
