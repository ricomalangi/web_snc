<div class="container">
  <h2>Tentang Kami</h2>
  <form action="index.php?menu=peroses_tentang_kami" method="POST">
    <div class="form-group">
      <label>Judul:</label>
      <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
      <label for="comment">Isi:</label>
      <textarea class="form-control" rows="5" id="comment" name="isi"></textarea>
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>