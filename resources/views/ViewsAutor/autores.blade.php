@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
<title>Autores</title>
<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

<a class="btn btn-gradient-primary mr-2" href="{{route('autorNuevo')}}">+ Nuevo</a>

<br>
<br><h3>Autores</h3><br>
<table class="table table-hover">
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
                    Vivo
                    @elseif ($autor->estado_aut == 0)
                    Muerto
                    @endif
                </th>
                    <th>{{$autor->created_at}} </th>

                <th><a href="{{route('viewAutor', $autor->id)}}">Más opciones</a></th>
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
@include('layouts.partials.footer')
