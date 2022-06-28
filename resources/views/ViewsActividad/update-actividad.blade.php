
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Actividad</title>

    <div class="col-md-6 grid-margin stretch-card" style="">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Actividad recreativa</h4>
    <p class="card-description">Información de la Actividad </p>

    <form class="forms-sample" action="{{route('updateActividad')}}" method="POST">

        @csrf
        <input type="hidden" name="cod" value="@foreach ($actividad as $item){{ $item->id }}@endforeach">

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_activ" value="@foreach ($actividad as $item){{ $item->nom_activ }}@endforeach">
        <span style="color: red">
            @error('nom_activ')
            {{$message}}
            @enderror
        </span>

        <br>

        <label for="dia">Día de realización:</label><br>
        <select class="form-control-sm" name="dia_activ" id="dia">
            <option value="1"@if ($item->dia_activ == 1) @selected(true) @endif>Lunes</option>
            <option value="2"@if ($item->dia_activ == 2) @selected(true) @endif>Martes</option>
            <option value="3"@if ($item->dia_activ == 3) @selected(true) @endif>Miercoles</option>
            <option value="4"@if ($item->dia_activ == 4) @selected(true) @endif>Jueves</option>
            <option value="5"@if ($item->dia_activ == 5) @selected(true) @endif>Viernes</option>
            <option value="6"@if ($item->dia_activ == 6) @selected(true) @endif>Sabado</option>
        </select>
        <br>

        <label for="hora">Hora de inicio:</label><br>
        <input class="form-control" type="time" id="hora" name="hora_activ" value="@foreach ($actividad as $item){{ $item->hora_activ }}@endforeach">
        <span style="color: red">
            @error('hora_activ')
            {{$message}}
            @enderror
        </span> <br>

        <label for="limite">Limite de participantes:</label><br>
        <input class="form-control" type="text" id="limite" name="limit_activ" value="@foreach ($actividad as $item){{ $item->limit_activ }}@endforeach">
        <span style="color: red">
            @error('limit_activ')
            {{$message}}
            @enderror
        </span><br>

        <label for="duracion">Duración en horas:</label><br>
        <input class="form-control" type="text" id="duracion" name="durac_activ" value="@foreach ($actividad as $item){{ $item->durac_activ }}@endforeach">
        <span style="color: red">
            @error('durac_activ')
            {{$message}}
            @enderror
        </span> <br>

        </div>
        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Actualizar">
        <a id="fdelete" href="{{route('deleteActividad', $item->id)}}"><input class="btn btn-gradient-primary mr-2" type="submit" value="Eliminar"></a>
        <a class="btn btn-light" href="{{route('actividades')}}">Regresar</a>
    </form>
</body>
</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('fdelete').addEventListener('click', function (e) {
            e.preventDefault();
            Swal.fire({
            text: "¿Seguro que deseas eliminar este registro?",
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
