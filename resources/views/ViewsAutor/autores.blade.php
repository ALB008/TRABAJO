<h1>Autores</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('autorNuevo')}}">Nuevo autor</a></p>
<table>
    <thead>
        <tr>
            <th>Cod</th>
            <th>Nombre</th>
            <th>Origen</th>
            <th>Estado</th>
            <th>Creación</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $autor as $autor)
            <tr>
                <th>{{$autor->id}}</th>
                <th>{{$autor->nom_aut}}</th>
                <th>{{$autor->orige_aut}}</th>
                <th>
                    @if ($autor->estado_aut == 1)
                    <p>Vivo</p>
                    @elseif ($autor->estado_aut == 0)
                    <p>Muerto</p>
                    @endif
                </th>
                    <th>{{$autor->created_at}} </th>

                <th><a href="{{route('viewAutor', $autor->id)}}">Mas info</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay autores registrados</th>
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
