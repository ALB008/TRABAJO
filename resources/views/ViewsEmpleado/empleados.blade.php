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
            <th>Creación</th>
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
                <th>{{$empleado->gen_emp}}</th>
                <th>{{$empleado->estud_emp}}</th>

                <th>{{$empleado->created_at}}</th>

                <th><a href="{{route('viewEmpleado', $empleado->id)}}">Editar</a>
                <a href="{{route('deleteEmpleado', $empleado->id)}}">Eliminar</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay empleados registrados</th>
            </tr>
        @endforelse
    </tbody>
</table>
