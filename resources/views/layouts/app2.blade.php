<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ENSAH - l'Ecole Nationale des Sciences Appliquées al-Hoceima</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">

<!-- login page -->
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/css/util.css">
  <link rel="stylesheet" type="text/css" href="/css/login.css">
<!--===============================================================================================-->


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background: rgba(0, 0, 0, 0.9); height: 72px; padding: 20px 0;">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="/#intro" class="scrollto">ENSAH</a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo-ensah.png" style="max-height: 30px ;" alt="" title="" /></a> -->

      </div>

      <nav id="nav-menu-container">

        <ul class="nav-menu">
          <li class=""><a href="/#intro">Acceuill</a></li>
          <li class="menu-has-children"><a href="">Infos</a>
            <ul>
              <li><a href="/presentation">Présentation</a></li>
              <li><a href="/administartion">Administartion</a></li>
              <li><a href="/departements-info">Département</a></li>
              <li><a href="/etudes">Etudes</a></li>
              <li><a href="/reglements">Réglements</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Formation</a>
            <ul>
              <li><a href="#">Cycle Préparatoire</a></li>
              <li><a href="#">Génie Civil</a></li>
              <li><a href="#">Génie Informatique</a></li>
              <li><a href="#">Génie Enérgitique</a></li>
              <li><a href="#">Génie de l'Envirenment</a></li>
            </ul>
          </li>

          <li><a href="/galeries">Galeries</a></li>
          
          @auth
            <li class="menu-has-children"><a href="">Espace Admin</a>
              <ul>
                <li><a href="/departements">Gestion des départements</a></li>
                <li><a href="/filieres">Gestion des filières</a></li>
                <li><a href="/modules">Gestion des modules</a></li>
                <li><a href="/profs">Gestion des professeurs</a></li>
                <li><a href="/etudiants">Gestion des étudiants</a></li>
              </ul>
            </li>
            <li class="menu-has-children"><a href="">Espace Etudiant</a>
              <ul>
                <li><a href="/emplois">Emplois de temps</a></li>
                <li><a href="/actualites">Actualitées</a></li>
                <li><a href="/activites">Activitées Para</a></li>
              </ul>
            </li>
          @else
          @endauth

          @guest
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
          @else
            <li class="menu-has-children menu-active" ><a href="#">{{ Auth::user()->name }}</a>
              <ul>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
              </ul>
            </li>
          @endguest
        </ul>

      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <main id="main">
      @yield('content')
  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h3>ENSAH</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactez nous</h4>
            <p>


              Ecole Nationale des Sciences <br>
              Appliquées d'Al Hoceima BP 03,<br>
              Ajdir Al-Hoceima <br>
              <strong>Phone:</strong> +212(0) 539 80 57 12<br>
              <strong>Email:</strong> info@ensah.ma<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>LARAVEL TEAM - ENSAH 2019</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="http://www.senorjob.com/">SenorJob</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

<!-- Login Page -->
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/login.js"></script>

</body>
</html>
