<?php
  $id_edit = $_POST["id_edit"];
  $sql = "SELECT * FROM menu WHERE id = $id_edit";
  $query = mysqli_query($conn,$sql);  
  $row = mysqli_fetch_assoc($query);
?>  
<div class="container">
  <h2>Stacked form</h2>
  <form action="index.php?menu=peroses_edit_menu" method="POST">
     <input type="text" name="id_edit" value="<?=$row['id']?>">
    <div class="form-group">
      <label>Nama Menu:</label>
      <input type="text" class="form-control" name="nama" value="<?=$row['nama_menu']?>">
    </div>
    <div class="form-group">
      <label>Alamat Menu:</label>
      <input type="text" class="form-control" name="alamat" value="<?=$row['alamat']?>">
    </div>
    <div class="form-group">
      <label>Keterangan:</label>
      <input type="text" class="form-control" name="keterangan" value="<?=$row['keterangan']?>">
    </div>   
    <input type="submit" value="EDIT" class="btn btn-primary">
  </form>
</div>