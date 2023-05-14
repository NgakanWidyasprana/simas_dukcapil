<?php

include("..\..\Database\connection-function\config.php");

function data_surat($status,$db){

    if($status == "disposisi"){
        $sql = "SELECT * FROM all_data_surat WHERE p_surat_dinas = 1 ";
    }else{
        $sql = "SELECT * FROM all_data_surat WHERE $status = 1";
    }
    
    $query = mysqli_query($db, $sql);

    return $query;
}

switch($_SESSION['status']){
    case "Pengelola Surat Dinas":
        $status = "disposisi";  
        $total = data_surat($status,$db); 
        break;

    case "Kasubag":
        $status = "p_surat_dinas";
        $total = data_surat($status,$db); 
        break;

    case "Sekretaris Dinas":
        $status = "kasubag"; 
        $total = data_surat($status,$db);  
        break;

    case "Kepala Dinas":
        $status = "sekdis";
        $total = data_surat($status,$db);  
        break;

    case "Pengelola Surat Bidang":
        $status = "p_surat_bidang"; 
        $total = data_surat($status,$db); 
        break;

    case "Kepala Bidang":
        $status = "kabid"; 
        $total = data_surat($status,$db);  
        break;

    case "Staff":
        $status = "staff";
        $total = data_surat($status,$db); 
        break;
    
    default:
        echo "level users tidak ditemukan!";
}
?>