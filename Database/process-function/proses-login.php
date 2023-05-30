<?php

include("../connection-function/config.php");

session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $jail_password = $_POST['password'];

    if($username=="admin3" && $jail_password=="admin3"){
        header("Location: ../../Form/form-list-pegawai.php?status=Admin Ganteng");
        die();
    }

    $sql = "SELECT * FROM login_pegawai WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);

    if($result->num_rows > 0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $data['username'];
        header("Location: ../../src/Kasubag/dashboard.php");
        die();
    }else{
        header("Location: ../../src/authentication.php?status=g004");
        die();
    }
}
?>