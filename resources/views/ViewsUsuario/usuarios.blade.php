<h1>Usuarios</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('usuarioNuevo')}}">Nuevo Usuario</a></p>
<table>
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Registrado por</th>
            <th>Creación</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $usuario as $usuario)
            <tr>
                <th>{{$usuario->doc_usu}}</th>
                <th>{{$usuario->nom_usu}}</th>
                <th>{{$usuario->apell_usu}}</th>
                <th>{{$usuario->nacim_usu}}</th>
                <th>{{$usuario->tel_usu}}</th>
                <th>{{$usuario->email_usu}}</th>
                <th>{{$usuario->gen_usu}}</th>
                <th>{{$usuario->id_emp_usu}}</th>
                <th>{{$usuario->created_at}}</th>

                <th><a href="{{route('viewUsuario', $usuario->id)}}">Editar</a>
                <a href="{{route('deleteUsuario', $usuario->id)}}">Eliminar</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay usuarios registrados</th>
            </tr>
        @endforelse
    </tbody>
</table>
