<?php
  $id_edit = $_POST["id_edit"];
  $sql = "SELECT * FROM kontak WHERE id_kontak = $id_edit";
  $query = mysqli_query($conn,$sql);  
  $row = mysqli_fetch_assoc($query);
?>  
<div class="container">
  <form action="index.php?menu=peroses_edit_kontak" method="POST">
  <input type="hidden" name="id_edit" value="<?= $row['id_kontak'] ?>">
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" class="form-control" name="nama" value="<?=$row['nama']?>">
    </div>
    <div class="form-group">
      <label>Email :</label>
      <input type="email" class="form-control" name="email" value="<?=$row['email']?>">
    </div>
    <div class="form-group">
      <label>Subject :</label>
      <input type="text" class="form-control" name="subject" value="<?=$row['subject']?>">
    </div>
    <div class="form-group">
      <label>Pesan :</label>
      <textarea name="message" class="form-control" rows="10"><?=$row['pesan']?></textarea>
    </div>
    <input type="submit" value="EDIT" class="btn btn-primary">
  </form>
</div>