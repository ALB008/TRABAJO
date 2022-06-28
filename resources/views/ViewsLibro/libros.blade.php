
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
<title>Libros</title>
<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <a class="btn btn-gradient-primary mr-2" href="{{route('libroNuevo')}}">+ Nuevo</a>
          <br>
          <br><h3>Libros</h3><br>
<table class="table table-hover">
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
                    En biblioteca
                    @else
                    Prestado
                    @endif
                </th>
                <th>{{$libro->created_at}}</th>


                <th><a href="{{route('viewLibro', $libro->id)}}">Más opciones</a></th>

            </tr>
        @empty
            <tr>
                <th>No hay libros registrados</th>
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
