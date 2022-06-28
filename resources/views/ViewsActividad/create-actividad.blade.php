
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Nueva Actividad</title>

    <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Nueva actividad recreativa</h4>
    <p class="card-description">Información de la Actividad </p>
    <form class="forms-sample" action="{{route('createActividad')}}" method="POST">
        @csrf

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input type="text" class="form-control" id="name" name="nom_activ">
        <span style="color: red">
            @error('nom_activ')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="dia">Día de realización:</label><br>
        <select class="form-control-sm" name="dia_activ" id="dia">
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miercoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sabado</option>
        </select>

        <br>
        <br>
        <label for="hora">Hora de inicio:</label><br>
        <input  type="time" class="form-control" id="hora" name="hora_activ">
        <span style="color: red">
            @error('hora_activ')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="limite">Limite de participantes:</label><br>
        <input type="text" class="form-control" id="limite" name="limit_activ">
        <span style="color: red">
            @error('limit_activ')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="duracion">Duración en horas:</label><br>
        <input type="text" class="form-control" id="duracion" name="durac_activ">
        <span style="color: red">
            @error('durac_activ')
            {{$message}}
            @enderror
        </span>
        <br>
        </div>

        <button type="submit" class="btn btn-gradient-primary mr-2">Registrar</button>
        <button class="btn btn-light"><a style="text-decoration: none; color:black" href="{{route('actividades')}}">Regresar</a></button>
                          </form>
                        </div>
                      </div>
                    </div>

</body>
</html>
@include('layouts.partials.footer')
