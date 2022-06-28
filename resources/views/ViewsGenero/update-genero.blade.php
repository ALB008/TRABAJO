@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Género</title>

    <div class="col-md-6 grid-margin stretch-card" style="">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Genero Literario</h4>
        <p class="card-description">Información del Genero </p>
    <form action="{{route('updateGenero')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($genero as $item){{ $item->id }}@endforeach">

        <div class="form-group">
        <label for="name">Nombre del genero:</label><br>
        <input class="form-control" type="text" id="name" name="nom_gen"  value="@foreach ($genero as $item){{ $item->nom_gen }}@endforeach">

        <span style="color: red"> @error('nom_gen')
            {{$message}}
            @enderror
        </span>
        <br> <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteGenero', $item->id)}}"><input class="btn btn-gradient-primary mr-2" type="submit" value="Eliminar"></a>
        <a class="btn btn-light" href="{{route('generos')}}">Regresar</a>
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

@include('layouts.partials.footer')
