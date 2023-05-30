<?php

function upload_disposisi($no_surat, $ket_tugas, $dir, $database){

    // Variabel Disposisi
    $nomer_surat = $no_surat;
    $penugasan = $ket_tugas;
    $conn_dir = $dir;
    $db = $database;

    $sql = "INSERT INTO data_disposisi (nomer_disposisi, link_disposisi, penugasan) VALUE ('$nomer_surat', '$conn_dir', '$penugasan')";
    $query = mysqli_query($db, $sql);
    
    // $update = "UPDATE status_surat SET kepdis =  WHERE kode_surat = '$nomer_surat'";
    // $query_2 = mysqli_query($db, $update);

    // $update_2 = "UPDATE data_surat SET status = 'disposisi' WHERE nomer_surat = '$nomer_surat'";
    // $query_3 = mysqli_query($db, $update_2);

    if($query){
        header('Location: ..\..\src\Kasubag\surat-masuk.php');
        die();
    }

    // if(isset($_POST['berkas_upload'])){
    //     echo "...."
    // }else{
    //     echo "data tidak bisa di upload";
    // }
}

?>