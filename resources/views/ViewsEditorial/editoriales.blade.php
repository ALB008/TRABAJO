
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
<title>Editoriales</title>

<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

<a class="btn btn-gradient-primary mr-2" href="{{route('editorialNuevo')}}">+ Nuevo</a>

<br>
<br><h3>Editoriales</h3><br>

<table class="table table-hover">
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

                <th><a href="{{route('viewEditorial', $editorial->id)}}">Más opciones</a></th>
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
@include('layouts.partials.footer')
