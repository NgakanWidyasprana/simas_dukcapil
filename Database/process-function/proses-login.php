<?php

include("../connection-function/config.php");

session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM login_pegawai WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);

    if($result->num_rows > 0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $data['username'];
        header("Location: ../../src/Kasubag/dashboard.php");
    }else{
        header("Location: ../../src/authentication.php?status=g004");
    }
}
?>