<?php

include("..\..\Database\connection-function\config.php");
include("..\..\Database\connection-function\cek-session.php"); 

if(!isset($_GET['id'])){
    header('Location: ..\..\src\Kasubag\detail-masuk.php');
    die();
}

// Variabel nomer surat
$nomer_surat = $_GET['id'];

if(isset($_POST['detail-surat'])){
    $status_surat = $_POST['status'];

    switch($_SESSION['status']){
        case 'Kepala Dinas':
            // Update Basic Query 
            $sql_1 = "UPDATE data_surat SET status='upload disposisi', disposisi='$status_surat' WHERE nomer_surat='$nomer_surat'";
            $sql_2 = "UPDATE status_surat SET kepdis = 2 WHERE kode_surat='$nomer_surat'";
            $query_1 = mysqli_query($db, $sql_1);
            $query_2 = mysqli_query($db, $sql_2);
            break;

        default:
            // Update Basic Query
            $sql_1 = "UPDATE data_surat SET status= '$status_surat' WHERE nomer_surat='$nomer_surat'";
            $sql_2 = "UPDATE status_surat SET $status_surat = 1 WHERE kode_surat='$nomer_surat'";
            $query_1 = mysqli_query($db, $sql_1);
            $query_2 = mysqli_query($db, $sql_2);
            break;
    }

    if($query_1 && $query_2){
        header('Location: ..\..\src\Kasubag\surat-masuk.php');
        die();
    }else{
        echo "gagal melakukan terusan";
    }
}
?>