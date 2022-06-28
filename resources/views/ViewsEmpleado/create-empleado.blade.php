
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')
    <title>Nuevo Bibliotecario</title>


    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Nuevo Bibliotecario</h4>
        <p class="card-description">Información dell Bibliotecario </p>
    <form class="forms-sample" action="{{route('createEmpleado')}}" method="POST">

        @csrf

        <div class="form-group">
        <label for="doc">N° Documento:</label><br>
        <input class="form-control" type="text" id="doc" name="doc_emp">
        <span style="color: red">
            @error('doc_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_emp">
        <span style="color: red">
            @error('nom_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="apell">Apellido:</label><br>
        <input class="form-control" type="text" id="apell" name="apell_emp">
        <span style="color: red">
            @error('apell_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input class="form-control" type="date" id="nacim" name="nacim_emp">
        <span style="color: red">
            @error('nacim_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="tel">Telefono:</label><br>
        <input class="form-control" type="text" id="tel" name="tel_emp">
        <span style="color: red">
            @error('tel_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="email">Email:</label><br>
        <input class="form-control" type="text" id="name" name="email_emp">
        <span style="color: red">
            @error('email_emp')
            {{$message}}
            @enderror
        </span> <br>
        <label for="gen">Genero:</label><br>
        <select class="form-control-sm" name="gen_emp" id="gen">
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
            <option value="3">Otro</option>
        </select>
        <br><br>
        <label for="educ">Nivel educativo:</label><br>
        <input class="form-control" type="text" id="educ" name="estud_emp">
        <span style="color: red">
            @error('estud_emp')
            {{$message}}
            @enderror
        </span> <br>



        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Registrar">
        <a class="btn btn-light" href="{{route('empleados')}}">Regresar</a>
    </form>
</body>
</html>
@include('layouts.partials.footer')
