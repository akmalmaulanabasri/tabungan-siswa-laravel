<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/components.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</head>

<body>
  @include('dashboard.layout.alert')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                @if(session('error-login'))
                <div class="alert alert-danger">
                  Anda belum login, silahkan login terlebih dahulu
                </div>
                @endif
                <form method="POST" action="{{ route('login.auth') }}" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
               </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets') }}/modules/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/modules/popper.js"></script>
  <script src="{{ asset('assets') }}/modules/tooltip.js"></script>
  <script src="{{ asset('assets') }}/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{ asset('assets') }}/modules/moment.min.js"></script>
  <script src="{{ asset('assets') }}/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('assets') }}/js/scripts.js"></script>
  <script src="{{ asset('assets') }}/js/custom.js"></script>
</body>
</html>