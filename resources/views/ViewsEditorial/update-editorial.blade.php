
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Editorial</title>

    <div class="col-md-6 grid-margin stretch-card" style="">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Editorial</h4>
        <p class="card-description">Información de la Editorial </p>

    <form class="forms-sample" action="{{route('updateEditorial')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($editorial as $item){{ $item->id }}@endforeach">

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_edit" value="@foreach ($editorial as $item){{ $item->nom_edit }}@endforeach">
        <span style="color: red">
            @error('nom_edit')
            {{$message}}
            @enderror
        </span><br>
        <label for="city">Ciudad:</label><br>
        <input class="form-control" type="text" id="city" name="ciud_edit" value="@foreach ($editorial as $item){{ $item->ciud_edit }}@endforeach">
        <span style="color: red">
            @error('ciud_edit')
            {{$message}}
            @enderror
        </span> <br>
        <label for="address">Dirección:</label><br>
        <input class="form-control" type="text" id="address" name="direc_edit" value="@foreach ($editorial as $item){{ $item->direc_edit }}@endforeach"> <span style="color: red">
            @error('direc_edit')
            {{$message}}
            @enderror
        </span><br>
        <label for="phone">Telefono:</label><br>
        <input class="form-control" type="text" id="phone" name="tel_edit" value="@foreach ($editorial as $item){{ $item->tel_edit }}@endforeach">
        <span style="color: red">
            @error('tel_edit')
            {{$message}}
            @enderror
        </span> <br>


        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteEditorial', $item->id)}}"><input class="btn btn-gradient-primary mr-2" type="submit" value="Eliminar"></a>
        <a class="btn btn-light" href="{{route('editoriales')}}">Regresar</a>
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
@include('layouts.partials.footer')
