<h1>Generos Literarios</h1>
<p><a href="{{route('generoNuevo')}}">Nuevo Genero</a></p>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CREADA</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $genero as $genero)
            <tr>
                <th>{{$genero->id}}</th>
                <th>{{$genero->nom_gen}}</th>
                <th>{{$genero->created_at}}</th>
                <th><a href="{{route('viewGenero', $genero->id)}}">Editar</a>
                <a href="{{route('deleteGenero', $genero->id)}}">Eliminar</a></th>
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
