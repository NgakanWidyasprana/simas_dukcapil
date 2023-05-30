<?php include('..\Database\addons-function\notif_register_akun.php');?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../Assets/style/style.css">
 
    <title>SISMAS REGISTER</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <form action="..\Database\process-function\proses-register.php" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
                <div class="input-group">
                    <input type="text" placeholder="NIK" name="nik">
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Confirm Password" name="cpassword">
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p class="login-register-text">Anda sudah punya akun? <a href="../src/authentication.php">Login </a></p>
            </form>
        </div>
    </div>
    
</body>
</html>