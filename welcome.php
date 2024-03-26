<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="css/all.css">

  <title>Carnet De Santé  - Index</title>
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= 
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="#">example@example.com</a>
        <i class="bi bi-phone"></i> +213 678532756
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> 
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>-->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="padding-top:20px ; text-align: center ; padding-bottom:20px">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto" style="font-size: 28px;"> <a href="welcome.php">CARNET DE SANTE</a></h1>
    
      <nav id="navbar" class="navbar order-last order-lg-0"  >
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A Propos</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
       

      <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Se déconnecter </span>  </a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center">
    <div class="container">
      <h1> Bienvenue <br>  </h1>
      <h2> Suivre toutes les informations et instructions liées à l'état de santé de vos fils<br> Cliquez sur ce bouton pour voir la liste des enfants </h2>
      <a href="crud/index.php" class="btn-get-started scrollto">VOIR LA LISTE</a>
    </div>
  </section><!-- End Home -->
<br><br><br><br><br><br><br><br>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>A Propos</h2>
          
        </div>

    <div class="row">
    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center
     align-items-stretch position-relative">
    <a href="#" class="glightbox play-btn mb-4"></a>
          </div>

    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch
     justify-content-center py-5 px-lg-5">
            
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-heart-pulse"></i></div>
              <h4 class="title"><a href="#">Les Consultations Médicales</a></h4>
              <p class="description">Il permet de prendre connaissance des renseignements qui y figurent et d’y consigner ses propres indications et constatations.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-syringe"></i></div>
              <h4 class="title"><a href="">Les Vaccinations</a></h4>
              <p class="description">Pour suivre la vaccination et écrire toutes les informations </p>
            </div>

           
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->    

        </div>

      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3 style="color: #2c4964;">CARNET DE SANTE</h3>
              <p>
               
                <strong>Phone:</strong> +213 678592317<br>
                <strong>Email:</strong> exampl@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>  
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color: #2c4964;">Liens</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">A Propos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color: #2c4964;">Nos services </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Les informations de l’enfant</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Les vaccinations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Les consultations médicales</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" class="img"  >
           
    
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CARNET DE SANTE</span></strong>. All Rights Reserved
      </div>      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
 

</body>

</html>



