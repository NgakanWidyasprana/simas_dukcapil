<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Surat Disposisi Page-Kasubag</title>

  <!-- style -->
  <link rel="stylesheet" href="../style/kasubag.css">
  <link rel="stylesheet" href="../style/drop-zone.css">
  <link rel="stylesheet" href="/assets/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  
  <!-- script -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="../script/script.js"></script>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
  <div class="my-container">
    <div class="sidebar">
      <div id="logo">
        <img class="bi pe-none me-2 logo-dashboard" src="../../Assets/logo/Logo-Kecil.svg" alt="logo" width="150px" height="102px">
      </div>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link nav-button-disable" aria-current="page" style="color: #99B2C6; opacity: 0.5;">
            <img src="../../Assets/icon/Category-1.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#home"/>
            </svg>
            Home
          </a>
        </li>
        <li>
          <a href="surat-masuk.php" class="nav-link nav-button-disable"  style="color: #99B2C6; opacity: 0.5; ">
            <img src="../../Assets/icon/Chart.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>
            Surat Masuk
          </a>
        </li>
        <li>
          <a href="surat-tugas.php" class="nav-link  active " style="background-color: #3A36DB;">
            <img src="../../Assets/icon/Ticket.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>
            Surat Tugas
          </a>
        </li>
      </ul>
    </div>
    
    <div class="main flex-column">
      
      <div class="title-section d-flex flex-row" style="margin-bottom: 40px;">
        <div class="text-top title-page">Tambah Surat Disposisi</div>
      </div>

      
      <form class="form-tambah-surat">
        <div class="d-flex" style="display: block;">
          <div class="flex-column flex-fill p-2" >
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Agenda</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan no agenda..">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Surat Masuk</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan no surat..">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Perihal</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan perihal..">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Lampiran</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jumlah lampiran..">
            </div>
          </div>

          <div class="flex-column flex-fill p-2">
            <div class="mb-3">
              <label class="form-label">Tanggal Surat</label>
              <input type="date" class="form-control" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Instansi Pengirim</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama instansi..">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Diterima</label>
              <input type="date" class="form-control" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Sifat</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan sifat..">
            </div>
          </div>

          <div class="flex-column flex-fill p-2">
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Unggah File</label>
              <div class="drop-zone">
                <span class="drop-zone__prompt">Drop file here or click to upload</span>
                <input type="file" name="myFile" class="drop-zone__input">
              </div>  
            </div>
            <p style="color: red;">*Lampiran/File Wajib Diisi</p>
          </div>
        </div>
      </form>

      
      <div class="ml-2" style="text-align: center;">
        <button type="submit" class="btn btn-primary submit-button" >Submit</button>
        <button class="btn btn-primary kembali-button" onclick="window.location.href = 'surat-tugas.php';">Kembali</button>
      </div>
      
    </div>
  </div>

  <script src="../script/drop-zone.js"></script>
</body>
</html>