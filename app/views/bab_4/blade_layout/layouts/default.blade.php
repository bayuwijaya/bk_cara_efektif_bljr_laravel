<!DOCTYPE html>
<html lang="en">

<head>
    @include('bab_4.blade_layout.includes.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      @include('bab_4.blade_layout.includes.header')
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      @include('bab_4.blade_layout.includes.section_hero')
  </section><!-- End Hero -->

  <main id="main">
      @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
      @include('bab_4.blade_layout.includes.footer')
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>