<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Surat Disposisi</title>

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
          <a href="surat-masuk.php" class="nav-link nav-button-disable " style="color: #99B2C6; opacity: 0.5;" >
            <img src="../../Assets/icon/Chart.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>
            Surat Masuk
          </a>
        </li>
        <li>
          <a href="surat-tugas.php" class="nav-link active " style="background-color: #3A36DB;" >
            <img src="../../Assets/icon/Ticket.svg" alt="">
            <svg class="bi pe-none me-2" width="1" height="1"><use xlink:href="#speedometer2"/></svg>
            Surat Tugas
          </a>
        </li>
      </ul>
    </div>
    
    <div class="main flex-column">
      <div class="title-section d-flex flex-row" style="margin-bottom: 10px;">
        <div class="text-top title-page">Detail Surat Disposisi</div>
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
            <th>File</th>
            <td><a href="#">install</a></td>
          </tr>
          <tr>
            <th>Telah Disetujui</th>
            <td>
              <div>kasubag</div>
              <div>sekretaris</div>
              <div>kepala dinas</div>
            </td>
          </tr>
          <tr>
            <th>Teruskan</th>
            <td>
              <select class="form-select" aria-label="Default select example">
                <option selected>Diteruskan Kepada</option>
                <option value="1">Kasubag</option>
                <option value="2">Sekretaris</option>
                <option value="3">Kepala Dinas</option>
                <option value="3">Kepala Bidang</option>
              </select>
            </td>
          </tr>
        </table>

        <table class="table " style="text-align: center;  border-radius: 5px;"" >
          <thead style="background-color: #3A36DB; color: azure;">
            <tr>
              <th scope="col"><div class="text-top flex-fill" style="text-align: center;" >Laporan</div></th>
            </tr>
          </thead>
          <tbody>
            <td>
              <textarea style="width: 800px; padding: 20px;" name="laporan" id="" cols="30" rows="10"></textarea>
            </td>
          </tbody>
          
          
            
        </table>

        
      </div>
      <div class="ml-2" style="text-align: center;">
        <button type="submit" class="btn btn-primary submit-button" >Submit</button>
        <button class="btn btn-primary kembali-button" onclick="window.location.href = 'surat-tugas.php';">Kembali</button>
      </div>
      
      
       
    </div>
  </div>
</body>
</html>