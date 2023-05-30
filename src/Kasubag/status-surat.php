<?php 
    include("..\..\Database\connection-function\cek-session.php");
    include("..\..\Database\process-function\get_data_surat.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Surat</title>

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
      
      <div class="title-section d-flex flex-row" style="margin-bottom: 10px;">
        <div class="text-top title-page">Status Surat</div>
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
              <th scope="row"><?php echo $surat['nomer_agenda'];?></th>
              <td><?php echo $surat['tanggal_surat'];?></td>
            </tr>
          </tbody>
        </table>
  
        <table class="table">
          <tr>
            <th>Hal Surat</th>
            <td><?php echo $surat['perihal'];?></td>
          </tr>
          <tr>
            <th>Instansi Pengirim</th>
            <td><?php echo $surat['instansi_pengirim'];?></td>
          </tr>
          <tr>
            <th>Nomor Surat</th>
            <td><?php echo $surat['nomer_surat'];?></td>
          </tr>
          <tr>
            <th>Lampiran</th>
            <td><?php echo $surat['lampiran'];?></td>
          </tr>
          <tr>
            <th>File</th>
            <?php echo "<td><a href= ..\..\Database\process-function\proses-download-surat.php?link=".$surat['link'].">Download Surat</a></td>"?>
          </tr>
          <tr>
            <th>Telah Disetujui</th>
            <td>
              <?php
                switch($_SESSION['status']){
                    case 'Pengelola Surat Dinas':
                      if($surat['kasubag']==1){
                        echo "<div style='color: #00FF00'>Kasubag</div>";
                      }else{
                        echo "<div style='color: #FF0000'>Kasubag</div>";
                      }
                      break;

                    case 'Kasubag':
                      if($surat['sekdis']==1){
                        echo "<div style='color: #00FF00'>Sekretaris Dinas</div>";
                      }elseif($surat['kasubag']==0){
                        echo "<div style='color: #FF0000'>Belum Diteruskan</div>";
                      }else{
                        echo "<div style='color: #FF0000'>Sekretaris Dinas</div>";
                      }
                      break;
                      
                    case 'Sekretaris Dinas':
                      if($surat['kepdis']==1 || $surat['kepdis']==2){
                        echo "<div style='color: #00FF00'>Kepala Dinas</div>";
                      }elseif($surat['sekdis']==0){
                        echo "<div style='color: #FF0000'>Belum Diteruskan</div>";
                      }else{
                        echo "<div style='color: #FF0000'>Kepala Dinas</div>"; 
                      }
                      break;

                    case 'Kepala Dinas':
                      if($surat['kepdis']==1){
                        echo "<div style='color: #00FF00'>Sudah Dibuatkan Disposisi</div>";
                      }else{
                        echo "<div style='color: #FF0000'>Belum Dibuatkan Disposisi</div>";
                      }
                      break; 
                }
              ?>
            </td>
          </tr>
        </table>
        
        <button class="add-surat" onclick="window.location.href = 'surat-masuk.php';">Kembali</button> 
      </div>
    </div>
  </div>
</body>
</html>