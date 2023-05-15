<?php
include("..\..\Database\connection-function\config.php");

// kalau tidak ada id di query string
if(!isset($_GET['id']) ){
    header('Location: ..\..\src\Kasubag\dashboard.php');
    die();
}

//ambil id dari query string
$no_surat = $_GET['id'];

// buat query untuk ambil data dari database
// Data Surat Utama
$sql = "SELECT * FROM data_disposisi WHERE nomer_disposisi='$no_surat'";
$query = mysqli_query($db, $sql);
$disposisi = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}


?>