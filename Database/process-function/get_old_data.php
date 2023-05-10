<?php 

include("..\Database\connection-function\config.php");

    // kalau tidak ada id di query string
    if(!isset($_GET['id']) ){
        header('Location: ..\Form\form-list-pegawai.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM identitas_pegawai WHERE NIP=$id";
    $query = mysqli_query($db, $sql);
    $pegawai = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }
?>