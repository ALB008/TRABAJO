
<div class="container-fluid page-body-wrapper">.

    <!--MENU LATERAL-->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        {{-- <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">

              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">David Grey. H</span>
              <span class="text-secondary text-small">Project Manager</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="">
            <span class="menu-title">Inicio</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" href="{{route('empleados')}}">
              <span class="menu-title">Bibliotecarios</span>
              <i class="mdi mdi-account-card-details menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('usuarios')}}">
              <span class="menu-title">Usuarios</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('libros')}}">
              <span class="menu-title">Libros</span>
              <i class="mdi mdi-book-minus menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('prestamos')}}">
            <span class="menu-title">Prestamos</span>
            <i class="mdi mdi-book-open-page-variant menu-icon"></i>
          </a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('actividades')}}">
              <span class="menu-title">Actividades</span>
              <i class="mdi mdi-briefcase-check menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('autores')}}">
              <span class="menu-title">Autores</span>
              <i class="mdi mdi-pen menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('editoriales')}}">
              <span class="menu-title">Editoriales</span>
              <i class="mdi mdi-lock-smart menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('generos')}}">
              <span class="menu-title">Generos Literarios</span>
              <i class="mdi mdi-script menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">
              <span class="menu-title">Cerra sesión</span>
              <i class="mdi mdi-account-off menu-icon"></i>
            </a>
          </li>





        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Basic UI Elements</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            </ul>
          </div>
        </li> --}}


        </li>
      </ul>
    </nav>


    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">




            </div>


