<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title-2') </title>

  <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->'
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('dashboardTest/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('dashboardTest/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('dashboardTest/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('dashboardTest/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('dashboardTest/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('dashboardTest/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('dashboardTest/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('dashboardTest/assets/css/style.css')}}" rel="stylesheet">

  {{--! import font awesome  --}}
  <script 
    src="https://kit.fontawesome.com/016d4eb37c.js" 
    crossorigin="anonymous">
  </script>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">IDWCenter</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <i class="fa-regular fa-user"></i>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6> {{ Str::ucfirst(Auth::user() -> name) }} </h6>
              <span></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form class="col" method="POST" action="{{ URL('/profile') }}">
                @csrf
                @method('GET')
                <button type="submit" class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-person"></i>
                  <span>Mon profil</span>
                </button>
              </form>
            </li>
            <li>
              <hr class="dropdown-divider">
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form class="col" method="POST" action="{{ URL('/logout') }}">
                @csrf
                <button type="submit" class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Deconnecter</span>
                </button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard')}}">
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <!-- visteur -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('showVisitor')}}">
          <i class="fa-solid fa-users"></i>
          <span>Les condidatures</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->

    <!-- message -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('showMessages')}}">
          <i class="fa-solid fa-message"></i>
          <span>Les messages</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->


    <!-- corbille -->

     <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
              <i class="fa-solid fa-trash"></i><span>Corbeille</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{route('showSoftdelete')}}">
                  <i class="fa-solid fa-circle"></i><span>Les condidatures supprimer</span>
                </a>
              </li>
              <li>
                <a href="{{route('showForceDeleteMessages')}}">
                  <i class="fa-solid fa-circle"></i><span>Les messages supprimer</span>
                </a>
              </li>
            </ul>
      </li>

  </aside>

  @yield('content-dahboard')

  <!-- Vendor JS Files -->
  <script src="{{asset('dashboardTest/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('dashboardTest/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('dashboardTest/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('dashboardTest/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('dashboardTest/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('dashboardTest/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('dashboardTest/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('dashboardTest/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('dashboardTest/assets/js/main.js')}}"></script>

</body>

</html>