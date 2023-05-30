<?php

include("..\..\Database\connection-function\config.php");

// function surat_tugas($status, $db){
//     $sql = "SELECT * FROM all_data_surat WHERE status='$status'";
//     $query = mysqli_query($db, $sql);

//     while($surat=mysqli_fetch_array($query)){
//         echo "<tr>";
//             // echo "<td>".$surat['nomer_surat']."</td>";
//             // echo "<td>".$surat['sifat']."</td>";
//             // echo "<td>".$surat['title']."</td>";
//             // echo "<td>".$surat['lampiran']."</td>";
//             // echo "<td>".$surat['perihal']."</td>";
//             // echo "<td>".$surat['tanggal_surat']."</td>";
//             // echo "<td>".$surat['instansi_pengirim']."</td>";
//             // // echo "<td>".$surat['status']."</td>";
//             // //echo "<td>";
//             // echo '<td><a href= ..\Database\process-function\proses-download-surat.php?link='.$surat['link'].">Download</a></td>";
//             // //echo "</td>";

//             echo "<td>".$surat['nomer_agenda']."</td>";
//             echo "<td>".$surat['nomer_surat']."</td>";
//             echo "<td>".$surat['sifat']."</td>";
//             echo "<td>".$surat['lampiran']."</td>";
//             echo "<td>".$surat['perihal']."</td>";
//             echo "<td>".$surat['tanggal_surat']."</td>";
//             echo "<td>".$surat['instansi_pengirim']."</td>";
            
//             if($_SESSION['status']=="Sekretaris Dinas"){
//                 echo "<td>";
//                     echo '<div class="action-button">';
//                         echo '<button class="delete-button" >Delete</button>';
//                         echo '<button class="edit-button" onclick="window.location.href='."'detail-surat-disposisi.php?id=".$surat['nomer_surat']."'".';">Detail</button>';
//                     echo "</div>";
//                 echo "</td>";
//             } else {
//                 echo "<td>";
//                     echo '<div class="action-button">';
//                         echo '<button class="edit-button" onclick="window.location.href='."'detail-surat-disposisi.php?id=".$surat['nomer_surat']."'".';">Detail</button>';
//                     echo "</div>";
//                 echo "</td>";
//             }
//         echo "</tr>";
//     }
// }

function assign_penugasan($tugas, $db){
    // Database All Surat

    if($_SESSION['status']=="Pengelola Surat Dinas"){
        $sql = "SELECT * FROM all_data_surat WHERE kepdis=2";
    }else{
        $sql = "SELECT * FROM all_data_surat WHERE penugasan='$tugas'";
    }

    $query = mysqli_query($db, $sql);

    while($surat = mysqli_fetch_array($query)){
        echo "<tr>";
            echo "<td>".$surat['nomer_agenda']."</td>";
            echo "<td>".$surat['nomer_surat']."</td>";
            echo "<td>".$surat['sifat']."</td>";
            echo "<td>".$surat['lampiran']."</td>";
            echo "<td>".$surat['perihal']."</td>";
            echo "<td>".$surat['tanggal_surat']."</td>";
            echo "<td>".$surat['instansi_pengirim']."</td>";
            
            if($_SESSION['status']=="Pengelola Surat Dinas"){
                echo "<td>";
                    echo '<div class="action-button">';
                        echo '<button class="delete-button" >Delete</button>';
                        echo '<button class="edit-button" onclick="window.location.href='."'detail-surat-disposisi.php?id=".$surat['nomer_surat']."'".';">Detail</button>';
                    echo "</div>";
                echo "</td>";
            } else {
                echo "<td>";
                    echo '<div class="action-button">';
                        echo '<button class="edit-button" onclick="window.location.href='."'detail-surat-disposisi.php?id=".$surat['nomer_surat']."'".';">Detail</button>';
                    echo "</div>";
                echo "</td>";
            }
        echo "</tr>";
    }
}


// Status Marker for Every User
switch($_SESSION['status']){
    case "Pengelola Surat Dinas":
        $status = "p_surat_dinas";
        assign_penugasan($status, $db);
        break;

    case "Kasubag":
        $status = "kasubag";
        assign_penugasan($status, $db);
        break;

    case "Sekretaris Dinas":
        $status = "sekdis"; 
        assign_penugasan($status, $db);  
        break;

    case "Kepala Dinas":
        $status = "kepdis";
        assign_penugasan($status, $db);;  
        break;

    case "Pengelola Surat Bidang":
        $status = "p_surat_bidang"; 
        assign_penugasan($status, $db);; 
        break;

    case "Kepala Bidang":
        $status = "kabid"; 
        assign_penugasan($status, $db);;  
        break;

    case "Staff":
        $status = "staff";
        assign_penugasan($status, $db);; 
        break;
    
    default:
        break;
}        
?>