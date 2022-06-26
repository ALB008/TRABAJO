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
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $prestamo as $prestamo)
            <tr>
                <th>{{$prestamo->id}}</th>
                <th>@forelse ($usuarios as $usuario)
                    @if ($prestamo->id_usu_pres == $usuario->id)
                    {{$usuario->nom_usu}}
                    @else
                    @endif
                @empty
                @endforelse
                </th>
                <th>@forelse ($libros as $libro)
                    @if ($prestamo->isbn_lib_pres == $libro->id)
                    {{$libro->nom_lib}}
                    @else
                    @endif
                @empty
                @endforelse
                </th>
                <th>{{$prestamo->Fpres_pres}}</th>
                <th>{{$prestamo->Fdev_pres}}</th>
                <th>
                    @if ($prestamo->estado_pres == 1)
                    <p>Activo</p>
                    @elseif ($prestamo->estado_pres == 0)
                    <p>Inactivo</p>
                    @endif
                </th>

                <th><a href="{{route('viewPrestamo', $prestamo->id)}}">Mas info</a></th>
            </tr>
        @empty
            <tr>
                <th>No hay prestamos registrados</th>
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
