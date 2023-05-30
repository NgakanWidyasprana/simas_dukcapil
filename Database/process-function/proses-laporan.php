<?php

include("..\..\Database\connection-function\config.php");

if(isset($_POST['laporan_update'])){
    $laporan = $_POST['laporan'];
    $no_surat = $_GET['id'];

    $sql="UPDATE data_disposisi SET laporan='$laporan', penugasan='selesai' WHERE nomer_disposisi = '$no_surat'";
    $query = mysqli_query($db, $sql);

    $update_status ="UPDATE data_surat SET status='selesai' WHERE nomer_surat= '$no_surat'";
    $query_2 = mysqli_query($db, $update_status);


    if($query && $query_2){
        header('Location: ..\..\src\Kasubag\surat-tugas.php');
        die();
    }

}


?>