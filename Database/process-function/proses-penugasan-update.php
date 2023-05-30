<?php

include("..\..\Database\connection-function\config.php");
include("..\..\Database\connection-function\cek-session.php");

if(!isset($_GET['id'])){
    header('Location: ..\..\src\Kasubag\surat-tugas.php');
    die();
}

// Variabel nomer surat
$nomer_surat = $_GET['id'];

if(isset($_POST['disposisi_update'])){
    $penugasan = $_POST['penugasan'];

    $sql_1 = "UPDATE data_surat SET status = 'ditugaskan', disposisi = '$penugasan' WHERE nomer_surat='$nomer_surat'";
    $sql_2 = "UPDATE status_surat SET kepdis = 1 WHERE kode_surat= '$nomer_surat'";
    $sql_3 = "UPDATE data_disposisi SET penugasan = '$penugasan' WHERE nomer_disposisi = '$nomer_surat'";
    $query_1 = mysqli_query($db, $sql_1);
    $query_2 = mysqli_query($db, $sql_2);
    $query_3 = mysqli_query($db, $sql_3);

    if($query_1 && $query_2 && $query_3){
        header('Location: ..\..\src\Kasubag\surat-tugas.php');
        die();
    }else{
        echo "gagal melakukan penugasan";
    }
}

?>