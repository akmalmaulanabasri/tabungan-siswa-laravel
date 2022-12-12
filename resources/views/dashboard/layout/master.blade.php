<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Tabungan Siswa - Wikrama</title>

  <!-- General CSS Files -->
  {{-- <link rel="stylesheet" href="{{ asset('assets') }}/modules/bootstrap/css/bootstrap.min.css"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/owlcarousel2/dist/{{ asset('assets') }}/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/modules/owlcarousel2/dist/{{ asset('assets') }}/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/components.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      
    @include('dashboard.layout.navbar')
    @include('dashboard.layout.sidebar')

    @yield('content')

    @include('dashboard.layout.alert')

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets') }}/modules/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/modules/popper.js"></script>
  <script src="{{ asset('assets') }}/modules/tooltip.js"></script>
  <script src="{{ asset('assets') }}/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="{{ asset('assets') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{ asset('assets') }}/modules/moment.min.js"></script>
  <script src="{{ asset('assets') }}/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('assets') }}/modules/jquery.sparkline.min.js"></script>
  <script src="{{ asset('assets') }}/modules/chart.min.js"></script>
  <script src="{{ asset('assets') }}/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="{{ asset('assets') }}/modules/summernote/summernote-bs4.js"></script>
  <script src="{{ asset('assets') }}/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets') }}/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('assets') }}/js/scripts.js"></script>
  <script src="{{ asset('assets') }}/js/custom.js"></script>
</body>
</html>