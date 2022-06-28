@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
<title>Generos Literarios</title>

<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

          <a class="btn btn-gradient-primary mr-2" href="{{route('generoNuevo')}}">+ Nuevo</a>
          <br>
          <br><h3>Generos Literarios</h3><br>
<table class="table table-hover">
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

                <th><a href="{{route('viewGenero', $genero->id)}}">Más opciones</a>

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
@include('layouts.partials.footer')
