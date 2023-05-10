<?php

include("../connection-function/config.php");

    # dKey = Delete Key ==> NIP
    if(isset($_GET['id']) ){
        $id = $_GET['id'];
        
        echo($id);

        $sql = "DELETE FROM `identitas_pegawai` WHERE `identitas_pegawai`.`NIP`=".$id;
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: ../../Form/form-list-pegawai.php');
        }else{
            die("Penghapusan Gagal, Data Tidak Ditemukan");
        }
    }else{
        die ("Akses Error");
    }
?>