<div class="container">
  <h2>Daftar Menu</h2>
   <a href="index.php?menu=tambah_menu"><button type="button" class="btn btn-primary">Tambah Menu</button></a>
   <div class="batas"></div>       
  <table class="table table-bordered">   
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Alamat</th>
        <th>Keterangan</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>    
    <tbody>
    <?php
     $sql = "SELECT * FROM menu";
     $query = mysqli_query($conn,$sql);
     $i=1;
     while($row = mysqli_fetch_assoc($query)){
    ?>    
      <tr>
        <td><?=$i?></td>
        <td><?=$row["nama_menu"]?></td>
        <td><?=$row["alamat"]?></td>
        <td><?=$row["keterangan"]?></td>
        <td>
          <form method="POST" action="index.php?menu=edit_menu">
          <input type="hidden" name="id_edit" value="<?=$row['id']?>">
          <button type="submit" class="btn btn-success">Edit</button>
          </form>
        </td>
        <td>
          <form method="POST" action="index.php?menu=delete_menu">
          <input type="hidden" name="id_hapus" value="<?=$row['id']?>">
          <button type="submit" class="btn btn-danger">Hapus</button>
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