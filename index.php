<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SMEKTI NIRCABLE COMMUNITY</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="style/img/favicon.png" rel="icon">
  <link href="style/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="style/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="style/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="style/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="style/css/style.css" rel="stylesheet">

  <!-- Costum Style Sendiri -->
  <style>
  </style>

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body>
  <?php
    include "backend/connect.php";
  //menampilkan menu,halaman utama dan footer website
    include ("menu.php");
    @$menu = $_GET["menu"];    
    if($menu){
      include("$menu.php");
    }
    else {  	
  	include ("main.php");
  	include ("footer.php");
    }
  ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> 

  <!-- JavaScript Libraries -->
  <script src="style/lib/jquery/jquery.min.js"></script>
  <script src="style/lib/jquery/jquery-migrate.min.js"></script>
  <script src="style/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="style/lib/easing/easing.min.js"></script>
  <script src="style/lib/wow/wow.min.js"></script>
  <script src="style/lib/waypoints/waypoints.min.js"></script>
  <script src="style/lib/counterup/counterup.min.js"></script>
  <script src="style/lib/superfish/hoverIntent.js"></script>
  <script src="style/lib/superfish/superfish.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="style/contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="style/js/main.js"></script>
</body>
</html>