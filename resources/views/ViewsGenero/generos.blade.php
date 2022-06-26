<h1>Generos Literarios</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('generoNuevo')}}">Nuevo Genero</a></p>
<table>
    <thead>
        <tr>
            <th>Cod</th>
            <th>Nombre</th>
            <th>Creación</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $genero as $genero)
            <tr>
                <th>{{$genero->id}}</th>
                <th>{{$genero->nom_gen}}</th>
                <th>{{$genero->created_at}}</th>

                <th><a href="{{route('viewGenero', $genero->id)}}">Más info</a>

                </th>

            </tr>
        @empty
            <tr>
                <th>No hay generos registrados</th>
            </tr>
        @endforelse
    </tbody>
</table>



<!--
    @ forelse ($genero as $item)
    <li>{ {$ item} }</li>
    @ empty
    <li>No hay datos registrados</li>
    @ endforelse

    Booleano
    <th>
        @ if ($game->active)
        <span style="color: green"> ACTIVO </span>
        @ else
        <span style="color: red"> INACTIVO </span>
        @ endif
    </th>

-->
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
