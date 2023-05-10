<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard-Kasubag</title>

  <!-- style -->
  <link rel="stylesheet" href="..\src\style\kasubag.css">
  <link rel="stylesheet" href="..\..\Assets\dist\css\bootstrap.min.css">
  

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
  <div class="my-container">
    <div class="sidebar">
      <div id="logo">
        <img class="bi pe-none me-2 logo-dashboard" src="..\..\Assets\logo\Logo-Kecil.svg" alt="logo" width="150px" height="102px">
      </div>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link active" aria-current="page" style="background-color: #3A36DB;">
            <img src="..\..\Assets\Icon\Category-1.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#home"/>
            </svg>
            Home
          </a>
        </li>
        <li>
          <a href="surat-masuk.html" class="nav-link nav-button-disable" style="color: #99B2C6; opacity: 0.5;">
            <img src="..\..\Assets\Icon\Chart.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>
            Surat Masuk
          </a>
        </li>
        <li>
          <a href="surat-tugas.html" class="nav-link nav-button-disable" style="color: #99B2C6; opacity: 0.5;">
            <img src="..\..\Assets\icon\Ticket.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>
            Surat Tugas
          </a>
        </li>
      </ul>
    </div>
    <div class="main flex-column">
      <div class="title-section" style="margin-bottom: 10px;">
        <div class="text-top title-page">Home</div>
        <div class="text-top petugas">Selamat datang Pengelola Surat</div>
      </div>
      
      <div class="row card-section">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Surat Masuk</h5>
              <p class="card-text">10 surat</p>
              <a href="surat-masuk.html" class="btn btn-primary" style="background-color: #3A36DB;">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Disposisi</h5>
              <p class="card-text">10 surat disposisi</p>
              <a href="surat-tugas.html" class="btn btn-primary" style="background-color: #3A36DB;">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="rectangle-announcement card" style="height: 400px;" >
        <div class="petugas">Pengumuman</div>
        
      </div>
      
      
    </div>
  </div>
</body>
</html>