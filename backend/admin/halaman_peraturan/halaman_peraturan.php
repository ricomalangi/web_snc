<?php
   $sql = "SELECT * FROM peraturan_organisasi";
   $query = mysqli_query($conn,$sql);
?>    
<div class="container">
  <h2>Daftar Peraturan</h2>
   <a href="index.php?menu=tambah_peraturan"><button type="button" class="btn btn-primary">Tambah Peraturan</button></a>
   <div class="batas"></div>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Peraturan</th>
        <th>Isi Peraturan</th>      
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
       <?php
     $sql = "SELECT * FROM peraturan_organisasi";
     $query = mysqli_query($conn,$sql);
     $i=1;
     while($row = mysqli_fetch_assoc($query)){
    ?>    
      <tr>
        <td><?=$i?></td>
        <td><?=$row["nama_peraturan"]?></td>
        <td><?=$row["isi_peraturan"]?></td>
        <td>
          <form method="POST" action="index.php?menu=edit_peraturan">
          <input type="hidden" name="id_edit" value="<?=$row['id']?>">
          <button type="submit" class="btn btn-success">Edit</button>
          </form>
        </td>
      </tr>   
      <?php
       $i++;
       } 
       ?>   
    </tbody>
  </table>
</div>
  </div>