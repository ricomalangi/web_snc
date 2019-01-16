<div class="container">
  <h2>Tambah Menu</h2>
  <form action="index.php?menu=peroses_menu" method="POST">
    <div class="form-group">
      <label>Nama Menu:</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label>Alamat Menu:</label>
      <input type="text" class="form-control" name="alamat">
    </div>
    <div class="form-group">
      <label>Keterangan:</label>
      <input type="text" class="form-control" name="keterangan">
    </div>   
    <input type="submit" value="SEND" class="btn btn-primary">
  </form>
</div>