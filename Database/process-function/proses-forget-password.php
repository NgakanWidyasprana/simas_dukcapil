<?php

include("../connection-function/config.php");

if(!isset($_POST['submit'])){
    header("Location: ../../src/authentication.php?status=g001");
    die();
}

$nik = $_POST['nik'];
// $username = $_POST['username'];
// $email = $_POST['email'];
$password = md5($_POST['password']);
$tmp_password = md5($_POST['cpassword']);

echo $nik;
echo $password;
echo $tmp_password;

if($password!=$tmp_password){
    header("Location: ../../src/authentication.php?status=g003");
    die(); 
}

$sql= "SELECT * FROM login_pegawai WHERE id='$nik'";
$query = mysqli_query($db, $sql);

if(!$query->num_rows > 0){
    header("Location: ../../src/authentication.php?status=g008");
    die(); 
}else{
    $sql_update = "UPDATE login_pegawai SET password='$password' WHERE id = $nik";
    $query_update = mysqli_query($db, $sql);

    if($query_update){
        header("Location: ../../src/authentication.php?status=sukses");
        die();     
    }else{
        header("Location: ../../src/authentication.php?status=g001");
        die();     
    }
}
?>