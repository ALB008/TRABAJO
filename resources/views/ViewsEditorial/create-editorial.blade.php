
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
    <title>Nueva Editorial</title>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Nueva Editorial</h4>
        <p class="card-description">Información de la Editorial </p>

    <form class="forms-sample" action="{{route('createEditorial')}}" method="POST">

        @csrf

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_edit">
        <span style="color: red">
            @error('nom_edit')
            {{$message}}
            @enderror
        </span><br>
        <label for="city">Ciudad:</label><br>
        <input class="form-control" type="text" id="city" name="ciud_edit">
        <span style="color: red">
            @error('ciud_edit')
            {{$message}}
            @enderror
        </span><br>
        <label for="address">Dirección:</label><br>
        <input class="form-control" type="text" id="address" name="direc_edit">
        <span style="color: red">
            @error('direc_edit')
            {{$message}}
            @enderror
        </span><br>
        <label for="phone">Telefono:</label><br>
        <input class="form-control" type="text" id="phone" name="tel_edit">
        <span style="color: red">
            @error('tel_edit')
            {{$message}}
            @enderror
        </span><br>


        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Registrar">
        <a class="btn btn-light" href="{{route('editoriales')}}">Regresar</a>
    </form>
</body>
</html>
@include('layouts.partials.footer')
