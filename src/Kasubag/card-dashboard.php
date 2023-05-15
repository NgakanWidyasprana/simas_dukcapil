<div class="row card-section">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Surat Masuk</h5>
        <p class="card-text"><?php echo mysqli_num_rows($total)?> Surat</p>
        <a href="surat-masuk.php" class="btn btn-primary" style="background-color: #3A36DB;">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Disposisi</h5>
        <p class="card-text"><?php echo mysqli_num_rows($totald)?> Disposisi</p>
        <a href="surat-tugas.php" class="btn btn-primary" style="background-color: #3A36DB;">Go somewhere</a>
      </div>
    </div>
  </div>
</div>