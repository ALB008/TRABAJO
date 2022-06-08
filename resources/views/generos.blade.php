<h1>Generos Literarios</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CREADA</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $genero as $genero)
            <tr>
                <th>{{$genero->cod_gen}}</th>
                <th>{{$genero->nom_gen}}</th>
                <th>{{$genero->created_at}}</th>
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
