<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sidebar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="foto\logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Archivo&display=swap" rel="stylesheet"/>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/styleSideBar.css" rel="stylesheet">
  @stack('styles')

</head>

<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none navi"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <center><img src="../RPL/assets/foto/logoResol.png"></center>
          <li><a href="#back" data-toggle="tooltip" data-placement="End" title="Kembali"><i class="bi-arrow-left"></i></a></li>
          <li><a href="/" class="nav-link scrollto "><i class="bx bx-user"></i> <span>Lihat Data Karyawan</span></a></li>
          <li><a href="/input" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Input Data Karyawan</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Edit Data Karyawan</span></a></li>
          <li><a href="/hapus" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Hapus Data Karyawan</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Laporan Penjualan</span></a></li>
          <li><a href="/laporan keuangan" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Laporan Keuangan</span></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      @yield('container')
    </div>
  </section><!-- End Hero -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container1">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 2 | Rekayasa Perangkat Lunak</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  @stack('scripts')
  <script src="js/mainSideBar.js"></script>

</body>
</html>