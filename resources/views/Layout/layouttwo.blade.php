<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Link Station</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Dashboard_assets/img/health_safety_environment.jpg')}}" rel="icon">
  <link href="{{ asset( 'Dashboard_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('Dashboard_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="'{{ asset ('Dashboard_assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset ('Dashboard_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->


  <link href="{{asset('Dashboard_assets/css/style.css')}}" rel="stylesheet">
  <style>
    /* Change navbar item color to black */
    .navbar-nav .nav-item {
        color: black; /* Change to black */
    }

    /* Change navbar item hover color */
    .navbar-nav .nav-item:hover {
        color: #333; /* A slightly darker shade on hover */
    }

    /* Change sub-item color to grey */
    .navbar-nav .nav-item .dropdown-menu .dropdown-item {
        color: grey; /* Change sub-item color to grey */
    }

    /* Change sub-item hover color */
    .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
        color: white; /* Change to white on hover for contrast */
        background-color: gray; /* Background color on hover */
    }

    /* Additional styles for the page */
    body {
        padding: 20px;
    }

    .content {
        text-align: center;
        margin-top: 50px;
    }
</style>

</head>

<body>

<!-- ======= Header ======= -->
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('Dashboard_assets/img/link_station.webp') }}" style="width: 115px;" alt="Logo">
        </a>
        <i style="font-size:22px;position: relative;left:-22px;" class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <!-- Search Icon -->
<li class="nav-item">
    <a class="nav-link nav-icon search-bar-toggle" href="#" style="color: darkgray; transition: none; font-size: 15px;">
        <i class="bi bi-search"></i>
    </a>
</li><!-- End Search Icon -->


            <!-- Notification Icon -->
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#" style="color:#f71381; transition: none; font-size: 15px;" title="Notifications">
                    <i class="bi bi-bell"></i>
                </a>
            </li><!-- End Notification Icon -->

            <!-- New Icon -->
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#" style="color: darkgray; transition: none; font-size: 15px;" title="Create New">
                    <i class="bi bi-plus-circle"></i>
                </a>
            </li><!-- End New Icon -->
<!-- Profile Icon -->
<li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color: darkgray; transition: none; font-size: 15px;">
        @if(auth()->user() && auth()->user()->profile_img)
            <img src="{{ asset(auth()->user()->profile_img) }}" alt="Profile Image" class="rounded-circle" width="40" height="40">
        @else
            <i class="bi bi-person-circle"></i> <!-- Default icon if no profile image -->
        @endif
        <span class="d-none d-md-block ps-2">{{ auth()->user()->name ?? 'Admin' }}</span>
    </a><!-- End Profile Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            @if(auth()->user() && auth()->user()->profile_img)
            <img src="{{ asset(auth()->user()->profile_img) }}" alt="Profile Image" class="rounded-circle" width="80" height="80">
        @else
            <i class="bi bi-person-circle" style="font-size: 80px; color: gray;"></i>
        @endif
            <h6>{{ auth()->user()->name ?? 'Admin' }}</h6>
            <span>{{ auth()->user()->role->role_name ?? 'User' }}</span>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->


            <!-- Logout Icon -->
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#" style="color: darkgray; transition: none; font-size: 15px;" title="Logout">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </li><!-- End Logout Icon -->
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->




 <!-- ======= Sidebar ======= -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" >

    <ul class="sidebar-nav" id="sidebar-nav" >

        <li  class="nav-item" >
            <a style="font-size:15px;" class="nav-link"  href="{{ asset("dashboard") }}">
                <i style="color: rgba(12, 12, 12, 0.829);" class="fas fa-hard-hat"></i>

              <span style="font-size: 12px; font-weight:bolder; color:rgba(12, 12, 12, 0.829);">Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i style="color:rgba(12, 12, 12, 0.829);;font-size:15px;" class="fas fa-users"></i>
                <span style="font-size: 12px; font-weight:bolder; color:rgba(12, 12, 12, 0.829);">Users Manage</span>
              <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                <a  href="{{ asset('users') }}">
                  <i class="bi bi-circle"></i><span>Users </span>
                </a>
              </li>


              <li>
                <a href="{{ asset('roles') }}">
                  <i class="bi bi-circle"></i><span>Role</span>
                </a>
              </li>














            </ul>
          </li>


          <li class="nav-item">
            <a href="{{ asset('contactus') }}" style="color:black" class="nav-link collapsed" >
                <i class="fas fa-phone-alt" style="color:black"></i>
                <span>Contact</span>
            </a>
        </li>





     <li class="nav-item">
      <a  class="nav-link collapsed" href="">
          <i style="color:black" class="bi bi-chat-dots"></i>
        <span>Feedback</span>
      </a>
    </li>

    <li class="nav-item">
      <a  class="nav-link collapsed" href="pages-faq.html">
        <i style="color:black" class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li>



    </ul>

</aside><!-- End Sidebar-->


  <main id="main" class="main">

    @yield('AdminContent')
  </main>



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>© 2025 All Rights Reserved | Designed with ❤️ by </span></strong>Links Station
        </div>


      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset ('Dashboard_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/chart.js/chart.umd.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/echarts/echarts.min.js')}}"></script>
      <script src="{{ asset('Dashboard_assets/vendor/quill/quill.js')}}"></script>
      <script src=  "{{ asset( 'Dashboard_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/tinymce/tinymce.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/php-email-form/validate.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{  asset('Dashboard_assets/js/main.js')}}"></script>

    </body>

    </html>
