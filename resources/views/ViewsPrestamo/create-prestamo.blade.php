
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Nuevo Prestamo</title>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Nuevo Prestamo</h4>
        <p class="card-description">Información del Prestamo </p>

    <form class="forms-sample" action="{{route('createPrestamo')}}" method="POST">

        @csrf

        <div class="form-group">
        <label for="usuario">Usuario:</label><br>
        <select class="form-control-sm" name="id_usu_pres" id="usuario">
            @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nom_usu}}</option>
            @endforeach
        </select><br>
        <label for="libro">Libro:</label><br>
        <select class="form-control-sm" name="isbn_lib_pres" id="libro">
            @foreach($libros as $libro)
            <option value="{{$libro->id}}">{{$libro->nom_lib}}</option>
            @endforeach
        </select> <br>
        <label for="fecha">Fecha de devolución:</label><br>
        <input class="form-control" type="date" id="fecha" name="Fdev_pres"> <br>
        <span style="color: red"> @error('Fdev_pres')
            {{$message}}
            @enderror
        </span>

        <input type="hidden" type="datetime" name="Fpres_pres"  value="<?php echo date("Y-m-d");?>">
        <input type="hidden" type="text" value="1">

        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Registrar">
        <a class="btn btn-light" href="{{route('prestamos')}}">Regresar</a>
    </form>
</body>
</html>
@include('layouts.partials.footer')
