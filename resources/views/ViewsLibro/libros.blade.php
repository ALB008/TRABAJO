<h1>Libros</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('libroNuevo')}}">Nuevo libro</a></p>
<table>
    <thead>
        <tr>
            <th>ISBN</th>
            <th>Codigo</th>
            <th>Titulo</th>
            <th>Año</th>
            <th>Paginas</th>
            <th>Editorial</th>
            <th>Estado</th>
            <th>Creación</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $libro as $libro)

            <tr>

                <th>{{$libro->isbn_lib}}</th>
                <th>{{$libro->cod_lib}}</th>
                <th>{{$libro->nom_lib}}</th>
                <th>{{$libro->anno_lib}}</th>
                <th>{{$libro->pag_lib}}</th>
                <th>@forelse ($editoriales as $editorial)
                        @if ($libro->cod_edit_lib == $editorial->id)
                        {{$editorial->nom_edit}}
                        @else
                        @endif
                    @empty
                    @endforelse
                </th>
                <th>@if ($libro->estado_lib == 1)
                    <p>En biblioteca</p>
                    @else
                    <p>Prestado</p>
                    @endif
                </th>
                <th>{{$libro->created_at}}</th>


                <th><a href="{{route('viewLibro', $libro->id)}}">Editar</a>
                <a href="{{route('deleteLibro', $libro->id)}}">Eliminar</a></th>

            </tr>
        @empty
            <tr>
                <th>No hay libros registrados</th>
            </tr>
        @endforelse


    </tbody>
</table>

