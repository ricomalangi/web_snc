<!DOCTYPE html>
<html>
<head>
  <title>Dashboard SNC</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif;}
    .batas {
    	width:100px;
    	height:20px;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!--menyimpan data hasil login -->
  <?php
  include "../connect.php";
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../login/index.php?pesan=belum_login");
  }
  ?>

  <!-- Bagian Menu -->
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();">
      <i class="fa fa-bars"></i>Menu
    </button>
    <span class="w3-bar-item w3-right"><a href="../login/logout.php" style="color: white;">LOGOUT</a></span>
  </div>
  <?php include "menu.php"; ?>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <!--Mengatur Link Halaman -->
  <?php
  @$menu = $_GET["menu"];

  //untuk halaman menu
  if($menu == "halaman_menu"){
  	include "halaman_menu/halaman_menu.php";
  }
  else if($menu == "tambah_menu"){
    include "halaman_menu/tambah_menu.php";
  }
  else if($menu == "peroses_menu"){
    include "halaman_menu/peroses.php";
  }
  else if($menu == "edit_menu"){
    include "halaman_menu/edit_menu.php";
  }
  else if($menu == "peroses_edit_menu"){
    include "halaman_menu/peroses_edit_menu.php";
  }
  else if($menu == "delete_menu"){
    include "halaman_menu/delete_menu.php";
  }    

  // untuk halaman tentang kami 
  else if($menu == "halaman_tentang_kami"){
    include "halaman_tentang_kami/halaman_tentang_kami.php";
  }
  else if($menu == "peroses_tentang_kami"){
    include "halaman_tentang_kami/peroses.php";
  }

  // untuk halaman kontak
  else if($menu == "halaman_kontak"){
    include "halaman_kontak/halaman_kontak.php";
  }
  else if($menu == "edit_kontak"){
    include "halaman_kontak/edit_kontak.php";
  }
  else if($menu == "peroses_edit_kontak"){
    include "halaman_kontak/peroses.php";
  }
  else if($menu == "hapus_kontak"){
    include "halaman_kontak/delete_kontak.php";
  }


  // untuk halaman peraturan
  else if($menu == "halaman_peraturan_organisasi"){
    include "halaman_peraturan/halaman_peraturan.php";
  }
 else if($menu == "tambah_peraturan"){
    include "halaman_peraturan/tambah_peraturan.php";
  }
  else if($menu == "edit_peraturan"){
    include "halaman_peraturan/edit_peraturan.php";
  }
  else if($menu == "peroses_peraturan"){
    include "halaman_peraturan/peroses.php";
  }
  else if($menu == "peroses_edit_peraturan"){
    include "halaman_peraturan/peroses_edit_peraturan.php";
  }

  // untuk halaman beranda
  else if($menu == "beranda"){
  	include "halaman_beranda/beranda.php";
  }  
  else {
  	include "halaman_beranda/beranda.php";
  }   
  ?>

</div>

  <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
      } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
      overlayBg.style.display = "none";
    }
  </script>
</body>
</html>
