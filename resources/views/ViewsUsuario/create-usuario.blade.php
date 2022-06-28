
@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

<title>Nuevo Usuario</title>

<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Nuevo Usuario</h4>
    <p class="card-description">Información del Usuario</p>


    <form class="forms-sample" action="{{route('createUsuario')}}" method="POST">

        @csrf

        <div class="form-group">
        <label for="doc">Documento:</label><br>
        <input class="form-control" type="text" id="doc" name="doc_usu">
        <span style="color: red"> @error('doc_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="name">Nombre:</label><br>
        <input class="form-control" type="text" id="name" name="nom_usu">
        <span style="color: red"> @error('nom_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="apell">Apellido:</label><br>
        <input class="form-control" type="text" id="apell" name="apell_usu">
        <span style="color: red"> @error('apell_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="nacim">Fecha de nacimiento:</label><br>
        <input class="form-control" type="date" id="nacim" name="nacim_usu">
        <span style="color: red"> @error('nacim_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="telefon">Telefono:</label><br>
        <input class="form-control" type="text" id="telefon" name="tel_usu">
        <span style="color: red"> @error('tel_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="mail">Email:</label><br>
        <input class="form-control" type="text" id="mail" name="email_usu">
        <span style="color: red"> @error('email_usu')
            {{$message}}
            @enderror
        </span> <br>
        <label for="genero">Genero:</label><br>
        <select class="form-control-sm" name="gen_usu" id="gen">
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
            <option value="3">Otro</option>
        </select>

        <input type="hidden" name="id_emp_usu" value="3"> <br>






        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Registrar">
        <a class="btn btn-light" href="{{route('usuarios')}}">Regresar</a>
    </form>
</body>
</html>
@include('layouts.partials.footer')
