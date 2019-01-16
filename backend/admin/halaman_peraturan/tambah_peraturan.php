<div class="container">
  <h2>Tambah Peraturan</h2>
  <form action="index.php?menu=peroses_peraturan" method="POST">
    <div class="form-group">
      <label>Nama Peraturan:</label>
      <input type="text" class="form-control" name="nama_peraturan">
    </div>
    <div class="form-group">
      <label for="comment">Isi Peraturan:</label>
  <textarea class="form-control" rows="5" id="comment" name="isi_peraturan"></textarea>
    </div>      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>