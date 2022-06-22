<h1>Actividades Recreativas</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('actividadNuevo')}}">Nueva Actividad</a></p>
<table>
    <thead>
        <tr>
            <th>Cod</th>
            <th>Nombre</th>
            <th>Día</th>
            <th>Hora</th>
            <th>Limite</th>
            <th>Duración</th>
            <th>Creación</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $actividad as $actividad)
            <tr>
                <th>{{$actividad->id}}</th>
                <th>{{$actividad->nom_activ}}</th>

                <th>

                        @if ($actividad->dia_activ == 1)
                        <p>Lunes</p>
                        @elseif ($actividad->dia_activ == 2)
                        <p>Martes</p>
                        @elseif ($actividad->dia_activ == 3)
                        <p>Miercoles</p>
                        @elseif ($actividad->dia_activ == 4)
                        <p>Jueves</p>
                        @elseif ($actividad->dia_activ == 5)
                        <p>Viernes</p>
                        @elseif ($actividad->dia_activ == 6)
                        <p>Sabado</p>
                        @endif
                </th>

                <th>{{$actividad->hora_activ}}</th>
                <th>{{$actividad->limit_activ}}</th>
                <th>{{$actividad->durac_activ}} horas</th>
                <th>{{$actividad->created_at}}</th>

                <th><a href="{{route('viewActividad', $actividad->id)}}">Editar</a>
                <a href="{{route('deleteActividad', $actividad->id)}}">Eliminar</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay actividades registradas</th>
            </tr>
        @endforelse
    </tbody>
</table>
