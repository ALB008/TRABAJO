@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
    <title>Nuevo Autor</title>
</head>
<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Nuevo autor</h4>
        <p class="card-description">Información del Autor </p>
    <form class="forms-sample" action="{{route('createAutor')}}" method="POST">

        @csrf

        <div class="form-group">
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_aut">
        <span style="color: red">
            @error('nom_aut')
            {{$message}}
            @enderror
        </span> <br> <br>
        <label for="origen">País de Origen:</label><br>
        <input class="form-control" type="text" id="origen" name="orige_aut">
        <span style="color: red">
            @error('orige_aut')
            {{$message}}
            @enderror
        </span> <br> <br>
        <label for="estado">Estado:</label><br>
        <select class="form-control-sm" name="estado_aut" id="estado">
            <option value="1">Vivo</option>
            <option value="0">Muerto</option>
        </select>

        <br> <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Registrar">
        <a class="btn btn-light" href="{{route('autores')}}">Regresar</a>
    </form>
</body>
</html>
@include('layouts.partials.footer')
