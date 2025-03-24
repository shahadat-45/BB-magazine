<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ settings()->title }} - Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset(settings()->favicon) }}" />
  <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.min.css" />
  <link href="{{ asset('assets') }}/summernote/summernote-bs5.css" rel="stylesheet">
  @stack('css')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
            <img src="{{ asset(settings()->dark_logo) }}" height="40" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Frontend Setup</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('hero.section') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Hero Section</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('about.us') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">About Us</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('newsletter') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-mail-forward"></i>
                </span>
                <span class="hide-menu">Newsletter</span>
              </a>
            </li>
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('brands.list') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-receipt-2"></i>
                </span>
                <span class="hide-menu">Brands</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('our_services') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-world"></i>
                </span>
                <span class="hide-menu">Our Services</span>
              </a>
            </li> --}}
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('settings') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Site Settings</span>
              </a>
            </li>
            {{-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">PORTFOLIO</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('projects') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-superhuman"></i>
                </span>
                <span class="hide-menu">Projects</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('testimonials') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Testimonials</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('our.team') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Our Team</span>
              </a>
            </li> --}}
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">BLOG</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('blog.list') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-blogger"></i>
                </span>
                <span class="hide-menu">Blog List</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('blog.create') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-edit"></i>
                </span>
                <span class="hide-menu">Create Blog</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('assets') }}/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ route('profile.edit') }}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a> --}}
                    <a class="btn btn-outline-primary mx-3 mt-2 d-block">
                      <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                          @csrf
                          <span onclick="document.getElementById('logoutForm').submit()">Log Out</span>
                      </form>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        @yield('contant')
      </div>
    </div>
  </div>
  <script src="{{ asset('assets') }}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/js/sidebarmenu.js"></script>
  <script src="{{ asset('assets') }}/js/app.min.js"></script>
  <script src="{{ asset('assets') }}/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{ asset('assets') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset('assets') }}/js/dashboard.js"></script>
  <script src="{{ asset('assets') }}/summernote/summernote-bs5.js"></script>
  @stack('script')
</body>

</html>