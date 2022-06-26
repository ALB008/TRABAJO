<h1>Editoriales</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('editorialNuevo')}}">Nueva Editorial</a></p>
<table>
    <thead>
        <tr>
            <th>Cod</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Creación</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $editorial as $editorial)
            <tr>
                <th>{{$editorial->id}}</th>
                <th>{{$editorial->nom_edit}}</th>
                <th>{{$editorial->ciud_edit}}</th>
                <th>{{$editorial->direc_edit}}</th>
                <th>{{$editorial->tel_edit}}</th>
                <th>{{$editorial->created_at}}</th>

                <th><a href="{{route('viewEditorial', $editorial->id)}}">Mas info</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay editoriales registradas</th>
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
