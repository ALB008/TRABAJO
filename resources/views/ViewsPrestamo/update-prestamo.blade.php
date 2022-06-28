
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

<title>Prestamo</title>

<div class="col-md-6 grid-margin stretch-card" style="">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Prestamo</h4>
    <p class="card-description">Información del Prestamo</p>

    <form class="forms-sample" action="{{route('updatePrestamo')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($prestamo as $item){{ $item->id }}@endforeach">

        <div class="form-group">
        <label for="usuario">Usuario:</label><br>
        <select class="form-control-sm" name="id_usu_pres" id="usuario">
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->id}}"
                    @if ($usuario->id == $item->id_usu_pres) @selected(true) @endif>
                    {{$usuario->nom_usu}}
                </option>
            @endforeach
        </select><br>
        <label for="libro">Libro:</label><br>
        <select class="form-control-sm" name="isbn_lib_pres" id="libro">
            @foreach($libros as $libro)
                <option value="{{$libro->id}}"
                    @if ($libro->id == $item->isbn_lib_pres) @selected(true) @endif>
                    {{$libro->nom_lib}}
                </option>
            @endforeach
        </select><br>
        <label for="fecha">Fecha de devolución:</label><br>
        <input class="form-control-sm" type="date" id="fecha" name="Fdev_pres" value="@foreach ($prestamo as $item){{ $item->Fdev_pres }}@endforeach">
        <span style="color: red"> @error('Fdev_pres')
            {{$message}}
            @enderror
        </span> <br>
        <label for="text">Estado:</label><br>
        <select class="form-control-sm" name="estado_pres" id="dia">
            <option value="1"@if ($item->estado_pres == 1) @selected(true) @endif>Activo</option>
            <option value="0"@if ($item->estado_pres == 0) @selected(true) @endif>Inactivo</option>
        </select><br>



        <br>


        <input class="btn btn-gradient-primary mr-2" type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deletePrestamo', $item->id)}}"><input class="btn btn-gradient-primary mr-2" type="submit" value="Eliminar"></a>
        <a class="btn btn-light" href="{{route('prestamos')}}">Regresar</a>
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
@include('layouts.partials.footer')
