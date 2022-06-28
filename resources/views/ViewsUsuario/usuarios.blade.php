
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
<title>Usuarios</title>

<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <a class="btn btn-gradient-primary mr-2" href="{{route('usuarioNuevo')}}">+ Nuevo</a>
          <br>
          <br><h3>Usuarios</h3><br>
<table class="table table-hover">
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
                    Hombre
                    @elseif ($usuario->gen_usu == 2)
                    Mujer
                    @elseif ($usuario->gen_usu == 3)
                    Otro
                    @endif
                </th>
                <th>{{$usuario->created_at}}</th>

                <th><a href="{{route('viewUsuario', $usuario->id)}}">Más opciones</a></th>
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
@include('layouts.partials.footer')
