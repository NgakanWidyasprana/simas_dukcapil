<?php include '..\Database\addons-function\notif_register_akun.php'; ?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../Assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Authentication</title>
    <link href="../Assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../src/style/style.css" rel="stylesheet">
    
  </head>
  <body>

  <main class="d-flex flex-nowrap" style="background-color: #F1F4FA;">
    <div class="d-flex flex-column flex-shrink-0 p-3 sidebar" style="width: 280px; background-color: #FFFFFF;">
      <!-- make the logo in the middle -->
      <div id="logo">
        <img class="bi pe-none me-2 logo-auth" src="../Assets/logo/Logo-Besar.svg" alt="logo" width="150px" height="102px">
      </div>
      
      <span class="fs-4">
              
        <h5 class="title login">LOGIN</h5>
        
      </span>

      <ul class="nav nav-pills flex-column mb-auto ">
        <li class="nav-item">
          <form class="form-auth" action="..\Database\process-function\proses-login.php" method="POST">
            <div class="mb-3">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="username" class="form-control" id="inputUsername" placeholder="Username" name="username" style="background: #F1F4FA; border-color: #F1F4FA;">
                
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" style="background: #F1F4FA; border-color: #F1F4FA;">
            </div>
            <div class="d-flex flex-row mb-4" >
              <a href="lupa-password.php" >lupa password?</a>
              <div style="margin-left:20px; margin-right:20px">or</div>
              <a href="../Form/form-register.php">buat akun</a>
            </div>
            <button type="submit" class="btn btn-primary button" name="submit">Login</button>
          </form>
        </li>
      </ul>
      
    </div>
    <div class="b-example-vr"></div>
    <img src="../Assets/pict/disdukcapil.gif" alt="" style="width:1920px; opacity: 50%;">
    <div class="welcome title-welcome">Selamat Datang di</div>
    <img class="bi pe-none me-2 logo-badung " src="../Assets/pict/Badung.png" alt="logo">
    <div class="centered title-website">SISMAS</div>
    <div class="title-website-text">
      <div>Sistem</div>
      <div>Manajemen</div>
      <div>Surat</div>
    </div>
    <div class="dinas">Dinas Kepundudukan dan Pencatatan Sipil Kabupaten Badung</div>
    <div class="visi">Gratis, Stop Calo, Stop Pungli, dan No Gratifikasi </div>
  </main>
    <script src="../Assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>