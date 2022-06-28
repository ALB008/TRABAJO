
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
<title>Actividades</title>
<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

          <button type="submit" class="btn btn-gradient-primary mr-2"><a style="text-decoration: none; color:white" href="{{route('actividadNuevo')}}">+ Nuevo</a></button>
          <br>
          <br><h3 >Actividades Recreativas</h3><br>
<table class="table table-hover">
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
                        Lunes
                        @elseif ($actividad->dia_activ == 2)
                        Martes
                        @elseif ($actividad->dia_activ == 3)
                        Miercoles
                        @elseif ($actividad->dia_activ == 4)
                        Jueves
                        @elseif ($actividad->dia_activ == 5)
                        Viernes
                        @elseif ($actividad->dia_activ == 6)
                        Sabado
                        @endif
                </th>

                <th>{{$actividad->hora_activ}}</th>
                <th>{{$actividad->limit_activ}} participantes</th>
                <th>{{$actividad->durac_activ}} horas</th>
                <th>{{$actividad->created_at}}</th>

                <th><a href="{{route('viewActividad', $actividad->id)}}">Más opciones</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay actividades registradas</th>
            </tr>
        @endforelse
    </tbody>
</table>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('delete') == 'ok')
<script>
    Swal.fire(
      'Eliminado!',
      'El registro se ha eliminado correctamente!',
      'success'
      )
</script>
@endif

@include('layouts.partials.footer')
