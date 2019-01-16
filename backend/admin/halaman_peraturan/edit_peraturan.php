<?php
  $id_edit = $_POST["id_edit"];
  $sql = "SELECT * FROM peraturan_organisasi WHERE id = $id_edit";
  $query = mysqli_query($conn,$sql);  
  $row = mysqli_fetch_assoc($query);
?>  
<div class="container">
  <h2>Stacked form</h2>
  <form action="index.php?menu=peroses_edit_peraturan" method="POST">
     <input type="text" name="id_edit" value="<?=$row['id']?>">
    <div class="form-group">
      <label>Nama Peraturan:</label>
      <input type="text" class="form-control" name="nama_peraturan" value="<?=$row['nama_peraturan']?>">
    </div>
    <div class="form-group">
      <label>Isi Peraturan:</label>
      <input type="text" class="form-control" name="isi_peraturan" value="<?=$row['isi_peraturan']?>">
    </div>
    <input type="submit" value="EDIT" class="btn btn-primary">
  </form>
</div>