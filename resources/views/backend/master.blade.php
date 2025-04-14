<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ settings()->title }} - Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset(settings()->favicon) }}" />
  <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.min.css" />
  <link href="{{ asset('assets') }}/summernote/summernote-bs5.css" rel="stylesheet">
  {{-- toaster css --}}
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  @stack('css')
  <style>
      /* Hide the checkbox */
      .dropdown-toggle {
          display: none;
      }
      
      /* Style the dropdown arrow */
      .dropdown-icon {
          margin-left: auto;
          transition: transform 0.3s ease;
      }
      
      /* Submenu styles */
      .sub-menu {
          max-height: 0;
          overflow: hidden;
          margin-left: 15px;
          padding-left: 10px;
          border-left: 1px solid rgba(255, 255, 255, 0.1);
          transition: max-height 0.3s ease, padding 0.3s ease;
      }
      
      /* When checkbox is checked */
      .dropdown-toggle:checked ~ .sub-menu {
          max-height: 500px; /* Adjust based on content */
          padding-top: 5px;
          padding-bottom: 5px;
      }
      
      /* Rotate arrow when open */
      .dropdown-toggle:checked + .sidebar-link .dropdown-icon {
          transform: rotate(180deg);
      }
      
      /* Hover effects */
      .sidebar-link:hover {
          padding-left: 5px !important;
      }
      
      /* Child item styling */
      .sub-menu .sidebar-link {
          padding-left: 25px !important;
          transition: padding 0.2s ease;
      }
  </style>
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
            <img src="{{ asset(settings()->logo) }}" height="40" alt="" />
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
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('hero.section') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Hero Section</span>
              </a>
            </li> --}}
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('about.us') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">About Us</span>
              </a>
            </li> --}}
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('newsletter') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-mail-forward"></i>
                </span>
                <span class="hide-menu">Newsletter</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('user.list') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-receipt-2"></i>
                </span>
                <span class="hide-menu">Manage User</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('gallery.list') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-world"></i>
                </span>
                <span class="hide-menu">Manage Gallery</span>
              </a>
            </li>
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
              <label class="sidebar-link" for="news-toggle" aria-expanded="false">
                  <span>
                      <i class="ti ti-brand-blogger"></i>
                  </span>
                  <span class="hide-menu">News</span>
                  <i class="ti ti-chevron-down dropdown-icon"></i>
              </label>
              <input type="checkbox" id="news-toggle" class="dropdown-toggle">
              <ul class="sub-menu">
                  <li class="sidebar-item">
                      <a href="{{ route('blog.list') }}" class="sidebar-link">
                          <i class="ti ti-list"></i>
                          <span class="hide-menu">News List</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a href="{{ route('blog.create') }}" class="sidebar-link">
                          <i class="ti ti-plus"></i>
                          <span class="hide-menu">Create News</span>
                      </a>
                  </li>
              </ul>
            </li>
            
            <li class="sidebar-item">
                <label class="sidebar-link" for="magazine-toggle" aria-expanded="false">
                    <span>
                        <i class="ti ti-book"></i>
                    </span>
                    <span class="hide-menu">Magazine</span>
                    <i class="ti ti-chevron-down dropdown-icon"></i>
                </label>
                <input type="checkbox" id="magazine-toggle" class="dropdown-toggle">
                <ul class="sub-menu">
                    <li class="sidebar-item">
                        <a href="{{ route('manage.magazine') }}" class="sidebar-link">
                            <i class="ti ti-list"></i>
                            <span class="hide-menu">Manage Magazine</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('create.magazine') }}" class="sidebar-link">
                            <i class="ti ti-plus"></i>
                            <span class="hide-menu">Create Magazine</span>
                        </a>
                    </li>
                </ul>
            </li>            
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Others</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('activity.log') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-brand-blogger"></i>
                </span>
                <span class="hide-menu">Activity Log</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('trash') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-trash"></i>
                </span>
                <span class="hide-menu">Trash</span>
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
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link nav-icon-hover p-0">
                  <svg width="22px" height="22px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M514.5 516.6m-484.5 0a484.5 484.5 0 1 0 969 0 484.5 484.5 0 1 0-969 0Z" fill="#44C0C6" /><path d="M514.5 1011c-66.7 0-131.5-13.1-192.5-38.9-58.9-24.9-111.8-60.6-157.2-106-45.4-45.4-81.1-98.3-106-157.2-25.8-61-38.9-125.7-38.9-192.5S33 384.9 58.8 323.9c24.9-58.9 60.6-111.8 106-157.2 45.4-45.4 98.3-81.1 157.2-106 61-25.8 125.7-38.9 192.5-38.9S646 35.2 707 61c58.9 24.9 111.8 60.6 157.2 106 45.4 45.4 81.1 98.3 106 157.2 25.8 61 38.9 125.7 38.9 192.5S996 648.2 970.2 709.2c-24.9 58.9-60.6 111.8-106 157.2-45.4 45.4-98.3 81.1-157.2 106-61 25.6-125.7 38.6-192.5 38.6z m0-968.9c-64.1 0-126.2 12.5-184.7 37.3-56.5 23.9-107.2 58.1-150.8 101.7-43.6 43.6-77.8 94.3-101.7 150.8C52.6 390.4 40 452.5 40 516.6s12.5 126.2 37.3 184.7c23.9 56.5 58.1 107.2 101.7 150.8 43.6 43.6 94.3 77.8 150.8 101.7 58.5 24.7 120.6 37.3 184.7 37.3s126.2-12.5 184.7-37.3c56.5-23.9 107.2-58.1 150.8-101.7s77.8-94.3 101.7-150.8c24.7-58.5 37.3-120.6 37.3-184.7s-12.5-126.2-37.3-184.7c-23.9-56.5-58.1-107.2-101.7-150.8-43.6-43.6-94.3-77.8-150.8-101.7-58.5-24.7-120.6-37.3-184.7-37.3z" fill="" /><path d="M528 32.8c-59.5 70.5-113.4 163.3 15.1 163.3 207.4 0 153.4 152.8-78.8 163.7-232.3 10.9-166.8 174.7-35.8 191 80.6 10.1 109.4 51.1 119.8 90.1v1.5c0 21.4 2.1 41.8 5.8 60.7v0.4c0 2.4 0.5 4.6 1.4 6.5 14.2 64.5 47.9 77.2 87.3 77.2 52.2 0 87.2-108.9 93.5-168.8 9.7-90.8 101.9-90.2 96.1-204.2-1.7-32.9 84.3-34.1 148.2-29C924.5 185.8 744 38.7 528 32.8z" fill="#60C13D" /><path d="M642.7 797.4c-36.4 0-80.2-9.6-96.9-84.1-1.1-2.8-1.7-5.9-1.8-9.1-3.8-20.2-5.8-40.9-5.8-61.7v-0.3c-13-47-49.4-73.7-111-81.4-34.9-4.4-67.4-18.9-91.4-40.9-23.8-21.8-36.8-49-35.8-74.7 0.7-18 8.4-43.8 41.4-64.6 28.4-17.9 69.6-28.2 122.4-30.7 76.5-3.6 124-21.9 150.4-36.7 30.6-17.1 48.6-38.6 48.1-57.4-0.5-22.9-32.1-49.6-119.2-49.6-45.4 0-73.7-11.6-84.3-34.4-8.3-17.9-5-41.9 9.9-71.2 11-21.6 28.4-46.6 51.7-74.2 2-2.3 4.9-3.6 7.9-3.5 54 1.5 106.9 11.6 157.2 30.1 48.7 17.9 94.1 43.4 135 75.7 40.5 32 75.6 69.9 104.4 112.7 29.2 43.5 51.2 91 65.3 141.3 0.9 3.1 0.2 6.5-1.9 9.1-2.1 2.5-5.3 3.9-8.5 3.6-69.5-5.6-121.1-0.8-134.8 12.5-2.5 2.4-2.7 4.4-2.7 6 3.4 67-26 98.2-52 125.7-20.6 21.9-40.1 42.5-44.1 80-3.7 34.9-15.7 78-30.5 110-20.5 44.4-45.7 67.8-73 67.8zM532.5 42.9c-46.2 55.5-65.9 98.2-55.6 120.4 8.8 18.8 40.8 22.8 66.2 22.8 43 0 77.2 6.3 101.6 18.7 23.7 12.1 37.1 30 37.5 50.5 0.6 26.8-20.6 54.3-58.3 75.3-28.3 15.8-78.8 35.4-159.2 39.2-89 4.2-143.1 32.6-144.8 76.1-0.8 19.8 9.9 41.4 29.3 59.2 21 19.3 49.6 32 80.4 35.8 70.2 8.8 113.4 41.6 128.2 97.5 0.2 0.8 0.3 1.7 0.3 2.6v1.5c0 19.8 1.9 39.6 5.6 58.8 0.1 0.6 0.2 1.3 0.2 1.9v0.4c0 0.9 0.2 1.7 0.5 2.4 0.3 0.6 0.5 1.3 0.7 2 12.6 57.5 40.2 69.3 77.6 69.3 25.1 0 45.2-35.2 54.9-56.1 16.9-36.6 26.1-78.8 28.7-103.7 4.7-44.2 27.5-68.3 49.4-91.6 25.5-27 49.6-52.6 46.6-111-0.4-8 2.6-15.4 8.7-21.3 11-10.6 32.2-17 65-19.4 24.1-1.8 50-1 70.8 0.2-13.6-43.2-33.2-84.1-58.6-121.9-27.6-41.1-61.3-77.5-100.2-108.2-39.2-31-82.8-55.4-129.6-72.6-46.7-17.2-95.8-26.9-145.9-28.8z" fill="" /></svg>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  @php $userProfile = App\Models\User::find(Auth::id())->image; @endphp
                  @if ($userProfile)
                    <img src="{{ asset($userProfile) }}" width="35" height="35" class="rounded-circle object-fit-contain">
                  @else
                    <img src="{{ asset('assets/images/profile/default-profile-picture.webp') }}" width="35" height="35" class="rounded-circle">
                  @endif
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
{{-- for toastr --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
      @if (Session::has('message'))
          var type = "{{ Session::get('alert-type', 'info') }}"
          switch (type) {
              case 'info':
                  toastr.info(" {{ Session::get('message') }} ");
                  break;

              case 'success':
                  toastr.success(" {{ Session::get('message') }} ");
                  break;

              case 'warning':
                  toastr.warning(" {{ Session::get('message') }} ");
                  break;

              case 'error':
                  toastr.error(" {{ Session::get('message') }} ");
                  break;
          }
      @endif
  </script>
  {{-- end toastr --}}
 <!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(function(){
      $(document).on('click', '#delete', function(e){
          e.preventDefault();
          var link = $(this).attr("href");

          Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085D6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'Cancel'
          }).then((result) => {
              if (result.isConfirmed) {
                  // Redirect AFTER confirmation
                  window.location.href = link;
              }
          });
      });
  });
</script>

</body>

</html>
