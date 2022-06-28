
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
    <title>Autor</title>

    <div class="col-md-6 grid-margin stretch-card" style="">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Autor</h4>
        <p class="card-description">Información del Autor </p>

    <form class="forms-sample" action="{{route('updateAutor')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($autor as $item){{ $item->id }}@endforeach">

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_aut" value="@foreach ($autor as $item){{ $item->nom_aut }}@endforeach">
        <span style="color: red">
            @error('nom_aut')
            {{$message}}
            @enderror
        </span> <br>

        <label for="origen">Pais de origen:</label><br>
        <input class="form-control" type="text" id="orige" name="orige_aut" value="@foreach ($autor as $item){{ $item->orige_aut }}@endforeach">
        <span style="color: red">
            @error('orige_aut')
            {{$message}}
            @enderror
        </span> <br>

        <label for="estado">Estado:</label><br>
        <select class="form-control-sm" name="estado_aut" id="estado">
            <option value="1"@if ($item->estado_aut == 1) @selected(true) @endif>Vivo</option>
            <option value="0"@if ($item->estado_aut == 0) @selected(true) @endif>Muerto</option>
        </select>


        <br> <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteAutor', $item->id)}}"><input class="btn btn-gradient-primary mr-2" type="submit" value="Eliminar"></a>
        <a class="btn btn-light" href="{{route('autores')}}">Regresar</a>
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

@include('layouts.partials.footer')
