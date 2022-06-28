
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
<title>Bibliotecarios</title>




<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

          <a class="btn btn-gradient-primary mr-2" href="{{route('empleadoNuevo')}}">+ Nuevo</a>
          <br>
          <br><h3>Bibliotecarios</h3>
<table class="table table-hover">
    <thead>
        <tr>

            <th>Doc</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Nivel Educativo</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $empleado as $empleado)
            <tr>
                <th>{{$empleado->doc_emp}}</th>
                <th>{{$empleado->nom_emp}}</th>
                <th>{{$empleado->apell_emp}}</th>
                <th>{{$empleado->nacim_emp}}</th>
                <th>{{$empleado->tel_emp}}</th>
                <th>{{$empleado->email_emp}}</th>
                <th>
                    @if ($empleado->gen_emp == 1)
                    Hombre
                    @elseif ($empleado->gen_emp == 2)
                    Mujer
                    @elseif ($empleado->gen_emp == 3)
                    Otro
                    @endif
                </th>
                <th>{{$empleado->estud_emp}}</th>

                <th><a href="{{route('viewEmpleado', $empleado->id)}}">Más opciones</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay empleados registrados</th>
            </tr>
        @endforelse
    </tbody>
</table>
@php
//Obtener edad a partir de la fecha de nacimiento
    //$date = Carbon::createFromDate(1970,19,12)->age;
@endphp

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

@if (session('register') == 'ok')
<script>
    Swal.fire(
      'Registrado!',
      'El bibliotecario ha sido registrado! \nSu usuario y contraseña por defecto son su documento y telefono!',
      'success'
      )
</script>
@endif
@include('layouts.partials.footer')
