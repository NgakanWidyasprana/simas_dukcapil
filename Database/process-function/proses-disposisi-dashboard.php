<?php

include("..\..\Database\connection-function\config.php");

function disposisi_db($status,$db){
    
    $sql = "SELECT * FROM all_data_surat WHERE disposisi = '$status'";
    $query = mysqli_query($db, $sql);

    return $query;
}

switch($_SESSION['status']){
    case "Pengelola Surat Dinas":
        $status = "p_surat_dinas";  
        $totald = disposisi_db($status,$db); 
        break;

    case "Kasubag":
        $status = "kasubag"; 
        $totald = disposisi_db($status,$db); 
        break;

    case "Sekretaris Dinas":
        $status = "sekdis";
        $totald = disposisi_db($status,$db); 
        break;

    case "Kepala Dinas":
        $status = "kepdis";
        $totald = disposisi_db($status,$db);   
        break;

    case "Pengelola Surat Bidang":
        $status = "p_surat_bidang"; 
        $totald = disposisi_db($status,$db); 
        break;

    case "Kepala Bidang":
        $status = "kabid"; 
        $totald = disposisi_db($status,$db);  
        break;

    case "Staff":
        $status = "staff";
        $totald = disposisi_db($status,$db); 
        break;
    
    default:
        echo "level users tidak ditemukan!";
}
?>