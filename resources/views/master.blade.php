<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('custom/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('custom/vendors/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css">

  <!-- Plugin CSS -->
  <link href="{{ asset('custom/vendors/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('custom/css/freelancer.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">

</head>

<body id="page-top">
<h2 class="hidet">Hiding text</h2>
<h2 class="hidet">Hiding text</h2>

  @include('inc.menu')

  
@yield('content')
  

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">Dhanmondi Dhaka
            <br>Bangladesh</p>
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-linkedin-in"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-dribbble"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="text-uppercase mb-4">Our Mission & Vission</h4>
          <p class="lead mb-0">Quality Without Compromise
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Webns Technology Ltd 2019</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('custom/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('custom/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('custom/vendors/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('custom/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{ asset('custom/js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('custom/js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('custom/js/freelancer.min.js') }}"></script>

</body>

</html>