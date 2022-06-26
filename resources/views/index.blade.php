<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>

    <p><a href="{{route('generos')}}">Generos</a></p>
    <p><a href="{{route('editoriales')}}">Editoriales</a></p>
    <p><a href="{{route('actividades')}}">Actividades</a></p>
    <p><a href="{{route('autores')}}">Autores</a></p>
    <p><a href="{{route('empleados')}}">Empleados</a></p>
    <p><a href="{{route('usuarios')}}">Usuarios</a></p>
    <p><a href="{{route('libros')}}">Libros</a></p>
    <p><a href="{{route('prestamos')}}">Prestamos</a></p>

    <!--
        @ antes de:
        es necesario poner end
        @ if (condicion)
            argumento
        @ endif

        foreach - recorrer un array
        forelse (@ empty) - recorrer un array y mostrar un mensaje si esta vacio

        llamar variable { { variable } }
    -->

</body>
</html>

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
  title: 'Bienvenido',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
</script>
 --}}
