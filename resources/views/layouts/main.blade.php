<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">

      <!-- Favicon -->
      <link rel="icon" href="{{ asset('/img/sipinaicon.png') }}">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

      <!-- Libraries Stylesheet -->
      <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
      <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

      <!-- Template Stylesheet -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/event.css') }}" rel="stylesheet">

      <title>SIPINA | {{ $title }}</title>
    </head>
    <body>
      @include ('partials.navbar')
      @include ('partials.footer')
      <div class="container-xxl bg-white p-0">
          @yield('container')
          @yield('footer')
      </div>

      <!--<script-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- JavaScript Libraries -->
      <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
      <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
      <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
      <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
      <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
      <!-- Template Javascript -->
      <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
