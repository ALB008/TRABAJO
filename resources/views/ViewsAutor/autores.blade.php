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
                <th>{{$autor->estado_aut}}</th>
                <th>{{$autor->created_at}}</th>

                <th><a href="{{route('viewAutor', $autor->id)}}">Editar</a>
                <a href="{{route('deleteAutor', $autor->id)}}">Eliminar</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay autores registrados</th>
            </tr>
        @endforelse
    </tbody>
</table>
