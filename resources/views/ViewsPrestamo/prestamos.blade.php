<h1>Prestamos</h1>
<p><a href="{{route('index')}}">Regresar</a></p>
<p><a href="{{route('prestamoNuevo')}}">Nuevo prestamo</a></p>
<table>
    <thead>
        <tr>
            <th>Cod</th>
            <th>Usuario</th>
            <th>Libro</th>
            <th>Fecha del prestamo</th>
            <th>Fecha de devolución</th>
            <th>Estado</th>
            <th>Creación</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $prestamo as $prestamo)
            <tr>
                <th>{{$prestamo->id}}</th>
                <th>{{$prestamo->id_usu_pres}}</th>
                <th>{{$prestamo->isbn_lib_pres}}</th>
                <th>{{$prestamo->Fpres_pres}}</th>
                <th>{{$prestamo->Fdev_pres}}</th>
                <th>{{$prestamo->estado_pres}}</th>
                <th>{{$prestamo->created_at}}</th>

                <th><a href="{{route('viewPrestamo', $prestamo->id)}}">Editar</a>
                <a href="{{route('deletePrestamo', $prestamo->id)}}">Eliminar</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay prestamos registrados</th>
            </tr>
        @endforelse
    </tbody>
</table>
