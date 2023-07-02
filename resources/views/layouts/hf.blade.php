<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Med-Way</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="../assets/img/logo.png" width="200" alt="">
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
          aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news">News</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/archive">Archive</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

@yield('content')

<footer class="page-footer">
  <div class="container">
    <div class="row px-md-3">
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Menus</h5>
        <ul class="footer-menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/news">News</a></li>
          <li><a href="/archive">Archive</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Contact</h5>
        <p class="footer-link mt-2">Andijan State Medical Institute</p>
        <a href="tel:998907656570" class="footer-link">+998 90 765 65 70</a>
        <a href="mailto:email@address.com" class="footer-link">medway@gmail.com</a>
      </div>
      <div class="col-sm-6 col-lg-3 py-3">
        <h5 class="mt-3">Social Media</h5>
        <div class="footer-sosmed mt-3">
          <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          {{-- <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a> --}}
          <a href="https://t.me/Medwayuz" target="_blank"><span class="mai-logo-telegram"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
        </div>
      </div>
    </div>

  </div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>

</html>