<?php 

include("..\..\Database\connection-function\config.php");

function if_surat($status,$db){

    if($status == "disposisi"){
        $sql = "SELECT * FROM all_data_surat WHERE p_surat_dinas = 1 ORDER BY tanggal_surat DESC LIMIT 3";
    }else{
        $sql = "SELECT * FROM all_data_surat WHERE $status = 1 ORDER BY tanggal_surat DESC LIMIT 3";
    }
    
    $query = mysqli_query($db, $sql);

    while($surat=mysqli_fetch_array($query)){
        echo "<tr>";
            // echo "<td>".$surat['nomer_surat']."</td>";
            // echo "<td>".$surat['sifat']."</td>";
            // echo "<td>".$surat['title']."</td>";
            // echo "<td>".$surat['lampiran']."</td>";
            // echo "<td>".$surat['perihal']."</td>";
            // echo "<td>".$surat['tanggal_surat']."</td>";
            // echo "<td>".$surat['instansi_pengirim']."</td>";
            // // echo "<td>".$surat['status']."</td>";
            // //echo "<td>";
            // echo '<td><a href= ..\Database\process-function\proses-download-surat.php?link='.$surat['link'].">Download</a></td>";
            // //echo "</td>";
            echo "<td>".$surat['nomer_surat']."</td>";
            echo "<td>".$surat['perihal']."</td>";
            echo '<td><a href= ..\..\Database\process-function\proses-download-surat.php?link='.$surat['link'].">Download</a></td>";
            
        echo "</tr>";
    }
    return $query;
}

// Status Marker for Every User
switch($_SESSION['status']){
    case "Pengelola Surat Dinas":
        $status = "disposisi";  
        $total = if_surat($status,$db); 
        break;

    case "Kasubag":
        $status = "p_surat_dinas";
        $total = if_surat($status,$db); 
        break;

    case "Sekretaris Dinas":
        $status = "kasubag"; 
        $total = if_surat($status,$db);  
        break;

    case "Kepala Dinas":
        $status = "sekdis";
        $total = if_surat($status,$db);  
        break;

    case "Pengelola Surat Bidang":
        $status = "p_surat_bidang"; 
        $total = if_surat($status,$db); 
        break;

    case "Kepala Bidang":
        $status = "kabid"; 
        $total = if_surat($status,$db);  
        break;

    case "Staff":
        $status = "staff";
        $total = if_surat($status,$db); 
        break;
    
    default:
        echo "level users tidak ditemukan!";
}
?>