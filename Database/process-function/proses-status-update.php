<?php

include("..\..\Database\connection-function\config.php");
include("..\..\Database\connection-function\cek-session.php"); 
include("proses-disposisi-surat.php");
include("get_data_surat.php");

if(!isset($_GET['id'])){
    header('Location: ..\..\src\Kasubag\detail-masuk.php');
    die();
}

// Variabel nomer surat
$nomer_surat = $_GET['id'];

// Variabel status surat
if($surat['disposisi']==NULL){
    $penugasan = "Menunggu Kepala Dinas";
}else{
    $penugasan = $surat['disposisi'];
}

if(isset($_POST['detail-surat'])){
    $status_surat = $_POST['status'];

    switch($_SESSION['status']){
        case 'Kepala Dinas':
            // Update Basic Query 
            $sql_1 = "UPDATE data_surat SET status='kepdis', disposisi='$status_surat' WHERE nomer_surat='$nomer_surat'";
            $sql_2 = "UPDATE status_surat SET kepdis = 2 WHERE kode_surat='$nomer_surat'";
            $query_1 = mysqli_query($db, $sql_1);
            $query_2 = mysqli_query($db, $sql_2);
            break;

        case 'Sekretaris Dinas':
            /* 
                File Disposisi Pre-processing
            */
                // Variabel File
                $nama_file = str_replace(" ","_",$_FILES['myFile']['name']);
                $file_tmp = $_FILES['myFile']['tmp_name'];
                // Variabel Location File
                $dir = "../../Assets/File/disposisi/";
                $conn_dir = $dir.$nama_file;
                $upload_file = Move_uploaded_file($file_tmp, $conn_dir);

            $sql_1 = "UPDATE data_surat SET status= '$status_surat' WHERE nomer_surat='$nomer_surat'";
            $sql_2 = "UPDATE status_surat SET $status_surat = 1 WHERE kode_surat='$nomer_surat'";
            $query_1 = mysqli_query($db, $sql_1);
            $query_2 = mysqli_query($db, $sql_2);
            upload_disposisi($nomer_surat, $penugasan, $conn_dir, $db);
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