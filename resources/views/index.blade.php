@include('layouts.partials.head')
<title>Login</title>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img style="height: 70px; width: 80px" src="{!! asset('theme/images/logo-mini.jpg') !!}">
                </div>
                <h4>Iniciar Sesión</h4>
                <h6 class="font-weight-light">Escribe tu usuario y contraseña para ingresar!</h6>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Usuario">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contrseña">
                  </div>
                  <div class="mt-3">
                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{route('empleados')}}">Ingresar</a>
                  </div>


                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
 @include('layouts.partials.footer')
