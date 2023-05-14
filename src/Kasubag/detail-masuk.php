<?php include("..\..\Database\connection-function\cek-session.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Surat Masuk</title>

  <!-- style -->
  <link rel="stylesheet" href="../style/kasubag.css">
  <link rel="stylesheet" href="/Assets/dist/css/bootstrap.min.css">
  
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
    <?php
      switch ($_SESSION['status']) {
        case 'Pengelola Surat Bidang':
          echo'<div class="sidebar">';
            echo'<div id="logo">';
              echo'<img class="bi pe-none me-2 logo-dashboard" src="../../Assets/logo/Logo-Kecil.svg" alt="logo" width="150px" height="102px">';
            echo'</div>';
            echo'<ul class="nav nav-pills flex-column mb-auto">';
              echo'<li class="nav-item">';
                echo'<a href="dashboard.php" class="nav-link active" aria-current="page" style="background-color: #3A36DB;">';
                  echo'<img src="../../Assets/icon/Category-1.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#home"/>';
                  echo'</svg>';
                  echo'Home';
                echo'</a>';
              echo'</li>';
              echo'<li>';
                echo'<a href="surat-tugas.php" class="nav-link nav-button-disable" style="color: #99B2C6; opacity: 0.5;">';
                  echo'<img src="../../Assets/icon/Ticket.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Surat Tugas';
                echo'</a>';
              echo'</li>';
            echo'</ul>';
          echo'</div>';
          break;

        case 'Kepala Bidang':
          echo'<div class="sidebar">';
            echo'<div id="logo">';
              echo'<img class="bi pe-none me-2 logo-dashboard" src="../../Assets/logo/Logo-Kecil.svg" alt="logo" width="150px" height="102px">';
            echo'</div>';
            echo'<ul class="nav nav-pills flex-column mb-auto">';
              echo'<li class="nav-item">';
                echo'<a href="dashboard.php" class="nav-link active" aria-current="page" style="background-color: #3A36DB;">';
                  echo'<img src="../../Assets/icon/Category-1.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#home"/>';
                  echo'</svg>';
                  echo'Home';
                echo'</a>';
              echo'</li>';
              echo'<li>';
                echo'<a href="surat-tugas.php" class="nav-link nav-button-disable" style="color: #99B2C6; opacity: 0.5;">';
                  echo'<img src="../../Assets/icon/Ticket.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Surat Tugas';
                echo'</a>';
              echo'</li>';
            echo'</ul>';
          echo'</div>';
          break;
        
        default:
          echo'<div class="sidebar">';
            echo'<div id="logo">';
              echo'<img class="bi pe-none me-2 logo-dashboard" src="../../Assets/logo/Logo-Kecil.svg" alt="logo" width="150px" height="102px">';
            echo'</div>';
            echo'<ul class="nav nav-pills flex-column mb-auto">';
              echo'<li class="nav-item">';
                echo'<a href="dashboard.php" class="nav-link nav-button-disable" aria-current="page" style="color: #99B2C6; opacity: 0.5;">';
                  echo'<img src="../../Assets/icon/Category-1.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#home"/>';
                  echo'</svg>';
                  echo'Home';
                echo'</a>';
              echo'</li>';
              echo'<li>';
                echo'<a href="surat-masuk.php" class="nav-link active" style="background-color: #3A36DB;">';
                  echo'<img src="../../Assets/icon/Chart.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Surat Masuk';
                echo'</a>';
              echo'</li>';
              echo'<li>';
                echo'<a href="surat-tugas.php" class="nav-link nav-button-disable" style="color: #99B2C6; opacity: 0.5;">';
                  echo'<img src="../../Assets/icon/Ticket.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Surat Tugas';
                echo'</a>';
              echo'</li>';
            echo'</ul>';
          echo'</div>';
          break;
      }
    ?>
    
    <div class="main flex-column">
      <div class="title-section d-flex flex-row" style="margin-bottom: 10px;">
        <div class="text-top title-page">Detail Surat Masuk</div>
      </div>
      <div class="content-status-surat" style="padding: 20px; margin: 0 20px 0 20px;">
        <table class="table" style="text-align: center; background-color: #3A36DB; color: azure; border-radius: 5px;">
          <thead>
            <tr>
              <th scope="col">No Agenda</th>
              <th scope="col">Tanggal Masuk</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">001</th>
              <td>13/03/2023</td>
            </tr>
          </tbody>
        </table>
  
        <table class="table">
          <tr>
            <th>Hal Surat</th>
            <td>Praktek Kerja Lapangan</td>
          </tr>
          <tr>
            <th>Instansi Pengirim</th>
            <td>Universitas Udayana</td>
          </tr>
          <tr>
            <th>Nomor Surat</th>
            <td>01/DISDUKCAPIL</td>
          </tr>
          <tr>
            <th>Lampiran</th>
            <td>1</td>
          </tr>
          <tr>
            <th>File Surat</th>
            <td><a href="#">install</a></td>
          </tr>
          
          
          <tr>
            <?php
              if($_SESSION['status']=="Kepala Dinas"){
                echo '<th>Disposisikan Kepada</th>';
              } else {
                echo '<th>Teruskan</th>';
              }
              
            ?>
            
            <td>
              <?php
                switch ($_SESSION['status']) {
                  case 'Kasubag':
                    echo '<select class="form-select" aria-label="Default select example">';
                      echo'<option selected>Diteruskan Kepada</option>';
                      
                      echo'<option value="1">Sekretaris Dinas</option>';
                      
                    echo'</select>';
                    break;

                  case 'Sekretaris Dinas':
                    echo '<select class="form-select" aria-label="Default select example">';
                      echo'<option selected>Diteruskan Kepada</option>';
                      echo'<option value="1">Kepala Dinas</option>';
                    echo'</select>';
                    break;
                  
                  case 'Kepala Dinas':
                    echo '<select class="form-select" aria-label="Default select example">';
                      echo'<option selected>Disposisikan Kepada</option>';
                      echo'<option value="1">Kasubag</option>';
                      echo'<option value="2">Kepala Bidang I</option>';
                      echo'<option value="3">Kepala Bidang II</option>';
                      
                    echo'</select>';
                    break;

                  default:
                    # code...
                    break;
                }
              ?>
            </td>
          </tr>
        </table>

        
        

        
      </div>
      <div class="ml-2" style="text-align: center;">
        <button type="submit" class="btn btn-primary submit-button" >Submit</button>
        <button class="btn btn-primary kembali-button" onclick="window.location.href = 'surat-masuk.php';">Kembali</button>
      </div>
      
      
       
    </div>
  </div>
</body>
</html>