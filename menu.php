<!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="style/img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <?php
          $sql = "SELECT * FROM menu";
          $query = mysqli_query($conn,$sql);
          $i=1;
          while($row = mysqli_fetch_assoc($query)){
        ?>
          <li><a href="<?=$row['alamat']?>"><?=$row['nama_menu']?></a></li>          
        <?php } ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->