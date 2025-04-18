<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ settings()->title }} - Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset(settings()->favicon) }}" />
  <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="{{ route('home') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img style="" src="{{ asset(settings()->logo) }}" width="180" alt="">
                </a>
                <p class="text-center">Enter Your Login Details</p>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="remember_me" name="remember">
                      <label class="form-check-label text-dark" for="remember_me">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-golder fw-bold" href="{{ route('password.request') }}">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-golden w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-wrapper" style="background-image: url({{ asset('public/assets/images/logos/login-page-background.jpg') }}); background-size: cover; background-position: center; height: 100vh; position: absolute; inset: 0; opacity: 0.1; z-index: -1;"></div>
  </div>
  <script src="{{ asset('assets') }}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>