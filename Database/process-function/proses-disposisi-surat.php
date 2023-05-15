<?php
    include("..\connection-function\config.php");
    include("..\process-function\get_data_surat.php");

    if(!isset($_GET['id'])){
        header('Location: ..\..\src\Kasubag\detail-surat-disposisi.php');
        die();
    }

    // Variabel Surat
    $nomer_surat = $surat['nomer_surat'];
    $penugasan = $surat['disposisi'];

    if(isset($_POST['berkas_upload'])){
        // Variabel File
        $nama_file = str_replace(" ","_",$_FILES['myFile']['name']);
        $file_tmp = $_FILES['myFile']['tmp_name'];
        // Variabel Location File
        $dir = "../../Assets/File/disposisi/";
        $conn_dir = $dir.$nama_file;
        $upload_file = Move_uploaded_file($file_tmp, $conn_dir);

        $sql = "INSERT INTO data_disposisi (nomer_disposisi, link_disposisi, penugasan) VALUE ('$nomer_surat', '$conn_dir', '$penugasan')";
        $query = mysqli_query($db, $sql);
        
        $update = "UPDATE status_surat SET kepdis = 1 WHERE kode_surat = '$nomer_surat'";
        $query_2 = mysqli_query($db, $update);

        $update_2 = "UPDATE data_surat SET status = 'disposisi' WHERE nomer_surat = '$nomer_surat'";
        $query_3 = mysqli_query($db, $update_2);

        if($query && $query_2){
            header('Location: ..\..\src\Kasubag\detail-surat-disposisi.php');
            die();
        }

    }else{
        echo "data tidak bisa di upload";
    }

?>