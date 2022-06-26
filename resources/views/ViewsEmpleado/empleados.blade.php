<h1>Bibliotecarios</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('empleadoNuevo')}}">Nuevo Bibliotecario</a></p>
<table>
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
                    <p>Hombre</p>
                    @elseif ($empleado->gen_emp == 2)
                    <p>Mujer</p>
                    @elseif ($empleado->gen_emp == 3)
                    <p>Otro</p>
                    @endif
                </th>
                <th>{{$empleado->estud_emp}}</th>

                <th><a href="{{route('viewEmpleado', $empleado->id)}}">Mas info</a></th>
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
