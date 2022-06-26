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
                <th>
                    @if ($usuario->gen_usu == 1)
                    <p>Hombre</p>
                    @elseif ($usuario->gen_usu == 2)
                    <p>Mujer</p>
                    @elseif ($usuario->gen_usu == 3)
                    <p>Otro</p>
                    @endif
                </th>
                <th>{{$usuario->created_at}}</th>

                <th><a href="{{route('viewUsuario', $usuario->id)}}">Mas info</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay usuarios registrados</th>
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
