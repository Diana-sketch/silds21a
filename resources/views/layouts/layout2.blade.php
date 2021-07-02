<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Equipo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/dashboard.rtl.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>

    
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ url('/') }}">
    
      <img src="/dist/img/udg.jpg" alt="udg" class="brand-image img-circle elevation-3"
          style="opacity: .8; width: 30px">
     Servicio 21a
  </a>


  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#"></a>
    </li>
  </ul>
</header>

<div class="container-fluid  ">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 ">
        <ul class="nav flex-column">
          <li class="nav-item">
           
              
              <div class="info">
                <div class="image">
                  <img src="/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <a href="#" class="d-block btn ">
                    @guest
                  
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                    @else
                    {{ Auth::user()->name }}
                  

                 
                    <a class="dropdown-item text-white b-1x" style="background-color: rgba(54, 50, 50, 0.575)" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                  

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>
  
                    @endguest
                </a>
              </div>
              </p>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="airplay"></span>
              Curso Taller
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="flag"></span>
              Instructor
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Calendario 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Estudiante
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Formulario de Registro
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="archive"></span>
              Rerportes
            </a>
          </li>
        </ul>

        
        
    </nav>



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        </div>
        <div class="container">
    
            {{-- @include('dashboard.partials.session-flash-status') --}}
             
             @yield('content')
    
        </div>


    

     
     
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
 

  {{-- <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
              <a href="#" class="d-block">
                  @guest
                  <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                  @else
                  {{ Auth::user()->name }}
                  <a class="dropdown-item text-white b-1x" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                      Cerrar Sesión
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                      @csrf
                  </form>

                  @endguest
              </a>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">

              <li class="nav-item">
                  <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                      <i class="nav-icon fas fa-home"></i>
                      <p>Inicio</p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="usuarios"
                      class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                          Usuarios
                          <?php use App\Models\User; $users_count = User::all()->count(); ?>
                          <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="clientes"
                      class="{{ Request::path() === 'clientes' ? 'nav-link active' : 'nav-link' }}">
                      <i class="nav-icon fa fa-credit-card "></i>
                      <p>
                          Clientes
                          <?php use App\Models\Cliente; $clientes_count = Cliente::all()->count(); ?>
                          <span class="right badge badge-danger">{{ $clientes_count ?? '0' }}</span>
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="proveedores"
                      class="{{ Request::path() === 'proveedores' ? 'nav-link active' : 'nav-link' }}">
                      
                      <i class="nav-icon  far fa-handshake "></i>
                      
                      <p>
                          Proveedores
                          <?php use App\Models\Proveedor; $provedors_count = Proveedor::all()->count(); ?>
                          <span class="right badge badge-danger">{{ $provedors_count ?? '0' }}</span>
                          {{-- <span class="right badge badge-danger">{{ $proveedores_count ?? '0' }}</span> --}}
                      {{-- </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="productos"
                      class="{{ Request::path() === 'productos' ? 'nav-link active' : 'nav-link' }}">
                      <i class="nav-icon fas fa fa-boxes "></i>
                      <p>
                          Productos
                          <?php use App\Models\Producto; $productos_count = Producto::all()->count(); ?>
                          <span class="right badge badge-danger">{{ $productos_count ?? '0' }}</span>
                      </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="ventas"
                      class="{{ Request::path() === 'ventas' ? 'nav-link active' : 'nav-link' }}">
                      <i class="nav-icon  fas fa-shopping-cart"></i>
                      <p>
                          Ventas
                          <?php use App\Models\Venta; $Ventas_count = Venta::all()->count(); ?>
                          <span class="right badge badge-danger">{{ $Ventas_count ?? '0' }}</span>
                      </p>
                  </a>
              </li>

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside> --}} 