

@include('layouts.partials.head')
@include('layouts.partials.header')
@include('layouts.partials.nav')

    <title>Nuevo Libro</title>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Nuevo Libro</h4>
        <p class="card-description">Información del Libro</p>

    <form class="forms-sample" action="{{route('createLibro')}}" method="POST">

        @csrf

        <div class="form-group">
        <label for="isbn">ISBN:</label><br>
        <input class="form-control" type="text" id="isbn" name="isbn_lib">
        <span style="color: red"> @error('isbn_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="codigo">Código:</label><br>
        <input class="form-control" type="text" id="codigo" name="cod_lib">
        <span style="color: red"> @error('cod_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="titulo">Titulo:</label><br>
        <input class="form-control" type="text" id="titulo" name="nom_lib">
        <span style="color: red"> @error('nom_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="año">Año de publicación:</label><br>
        <input class="form-control" type="text" id="año" name="anno_lib">
        <span style="color: red"> @error('anno_lib')
            {{$message}}
            @enderror
        </span> <br>
        <label for="paginas">Cantidad de páginas:</label><br>
        <input class="form-control" type="text" id="paginas" name="pag_lib">
        <span style="color: red"> @error('pag_lib')
            {{$message}}
            @enderror
        </span> <br>

        <label for="editorial">Editorial:</label><br>
        <select class="form-control-sm" name="cod_edit_lib" id="editorial">
            @foreach($editoriales as $editorial)
            <option value="{{$editorial->id}}">{{$editorial->nom_edit}}</option>
            @endforeach
        </select>
        <br>



        <br>
        <input class="btn btn-gradient-primary mr-2" type="submit" value="Registrar">
        <a class="btn btn-light" href="{{route('libros')}}">Regresar</a>
    </form>
</body>
</html>
@include('layouts.partials.footer')
