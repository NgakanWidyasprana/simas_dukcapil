<?php include("..\..\Database\connection-function\cek-session.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - <?php echo $_SESSION['status']; ?></title>

  <!-- style -->
  <link rel="stylesheet" href="../style/kasubag.css">
  <link rel="stylesheet" href="/Assets/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- script -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="../script/script.js"></script>

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
              echo '<hr class="divider-thing"/>';
              echo'<li>';
                echo'<a href="../../Database/process-function/proses-logout.php" class="nav-link nav-button-disable" style="color: #D11A2A; margin-left: 30px;">';
                  echo'<img src="../../Assets/icon/Document-Red.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Logout';
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
                echo'<a href="surat-tugas.php" class="nav-link nav-button-disable" style="color: #99B2C6; opacity: 0.5;" >';
                  echo'<img src="../../Assets/icon/Ticket.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Surat Tugas';
                echo'</a>';
              echo'</li>';
              echo '<hr class="divider-thing"/>';
              echo'<li>';
                echo'<a href="../../Database/process-function/proses-logout.php" class="nav-link nav-button-disable" style="color: #D11A2A; margin-left: 30px;">';
                  echo'<img src="../../Assets/icon/Document-Red.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Logout';
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
                echo'<a href="dashboard.php" class="nav-link active" aria-current="page" style="background-color: #3A36DB;">';
                  echo'<img src="../../Assets/icon/Category-1.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#home"/>';
                  echo'</svg>';
                  echo'Home';
                echo'</a>';
              echo'</li>';
              echo'<li>';
                echo'<a href="surat-masuk.php" class="nav-link nav-button-disable" style="color: #99B2C6; opacity: 0.5;">';
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
              echo '<hr class="divider-thing"/>';
              echo'<li>';
                echo'<a href="../../Database/process-function/proses-logout.php" class="nav-link nav-button-disable" style="color: #D11A2A;margin-left: 30px;">';
                  echo'<img src="../../Assets/icon/Document-Red.svg" alt="">';
                  echo'<svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>';
                  echo'Logout';
                echo'</a>';
              echo'</li>';
            echo'</ul>';
          echo'</div>';
          break;
      }
    ?>
    
    
    <div class="main flex-column">
      <div class="title-section" style="margin-bottom: 10px;">
        <div class="text-top title-page">Home</div>
        <div class="text-top petugas">Selamat datang <?php echo $_SESSION['status']; ?></div>
      </div>
      
      <?php
        switch ($_SESSION['status']) {
          case 'Pengelola Surat Bidang':
            include ("card-dashboard-bidang.php");
            break;
  
          case 'Kepala Bidang':
            include ("card-dashboard-bidang.php");
            break;
          
          default:
            include ("card-dashboard.php");
            break;
        }
      ?>
      
      
      <div class="rectangle-announcement card" style="height: 400px;" >
        <div class="petugas" style="padding: 5px; margin: 10px 0 10px 0;">Pengumuman</div>
        <div class="p-2">
          <table class="table table-bordered" style="text-align: center; margin-bottom: 0;">
            <thead>
              <tr>
                <th scope="col" style="color: #000000; background-color: #ededed;">Informasi Surat Pengumuman</th>
              </tr>
            </thead>
            
          </table>
  
          <table class="table table-bordered" style="text-align: center; padding: 5px; color: #000000;">
            <thead>
              <tr>
                <th>No Surat</th>
                <th>Perihal</th>
                <th>File</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Kerja Bakti Lingkungan</td>
                <td><a href="#">install</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>