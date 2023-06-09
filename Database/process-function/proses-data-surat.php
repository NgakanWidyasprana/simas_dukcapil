<?php 

include("..\..\Database\connection-function\config.php");

function data_surat($status,$db){

    if($status == "disposisi"){
        $sql = "SELECT * FROM all_data_surat WHERE p_surat_dinas = 1 ";
    }else{
        $sql = "SELECT * FROM all_data_surat WHERE $status = 1";
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

            echo "<td>".$surat['nomer_agenda']."</td>";
            echo "<td>".$surat['nomer_surat']."</td>";
            echo "<td>".$surat['sifat']."</td>";
            echo "<td>".$surat['lampiran']."</td>";
            echo "<td>".$surat['perihal']."</td>";
            echo "<td>".$surat['tanggal_surat']."</td>";
            echo "<td>".$surat['instansi_pengirim']."</td>";
            
            if($_SESSION['status']=="Pengelola Surat Dinas"){
                echo "<td>";
                    echo '<button class="delete-button" >Delete</button>';
                    echo '<button class="edit-button" onclick="window.location.href='."'status-surat-edit.php?id=".$surat['nomer_surat']."'".'";" >Edit</button>';
                    echo '<button class="status-button" onclick="window.location.href='."'status-surat.php?id=".$surat['nomer_surat']."'".'";" >Status</button>';    
                echo "</td>";
            } else {
                echo "<td>";
                    echo '<button class="edit-button" onclick="window.location.href='."'detail-masuk.php?id=".$surat['nomer_surat']."'".'";" >Detail</button>';
                    echo '<button class="status-button" onclick="window.location.href='."'status-surat.php?id=".$surat['nomer_surat']."'".';" >Status</button>';    
                echo "</td>";
            }
            
            
        echo "</tr>";
    }
    return $query;
}

// Status Marker for Every User
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