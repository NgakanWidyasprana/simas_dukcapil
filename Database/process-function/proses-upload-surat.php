<?php

include("..\connection-function\config.php");
include("..\connection-function\cek-session.php");

function update_status_surat($kode_surat, $status, $db){

    switch($status){
        case "p_surat_dinas":
            $sql = "INSERT INTO status_surat (kode_surat, p_surat_dinas) VALUE ('$kode_surat', 1)";
            $query = mysqli_query($db, $sql);
            return $query;
            break;
        case "kasubag":
            $sql = "INSERT INTO status_surat (kode_surat, kasubag) VALUE ('$kode_surat', 1)";
            $query = mysqli_query($db, $sql);
            return $query; 
            break;
        case "sekdis":
            $sql = "INSERT INTO status_surat (kode_surat, sekdis) VALUE ('$kode_surat', 1)";
            $query = mysqli_query($db, $sql);
            return $query;
            break;
        case "kepdis":
            $sql = "INSERT INTO status_surat (kode_surat, kepdis) VALUE ('$kode_surat', 1)";
            $query = mysqli_query($db, $sql);
            return $query;
            break;
        case "p_surat_bidang":
            $sql = "INSERT INTO status_surat (kode_surat, p_surat_bidang) VALUE ('$kode_surat', 1)";
            $query = mysqli_query($db, $sql);
            return $query;
            break;
        case "kabid":
            $sql = "INSERT INTO status_surat (kode_surat, kabid) VALUE ('$kode_surat', 1)";
            $query = mysqli_query($db, $sql);
            return $query;
            break;
        case "staff":
            $sql = "INSERT INTO status_surat (kode_surat, staff) VALUE ('$kode_surat', 1)";
            $query = mysqli_query($db, $sql);
            return $query;
            break;
        default:
            return 0;
    }
}

function upload_surat($status, $db){
    if(isset($_POST['berkas_upload'])){

        // Variabel Surat
        $nomer_surat = $_POST['nomer_surat'];
        $nomer_agenda = $_POST['nomer_agenda'];
        $perihal = $_POST['perihal'];
        $lampiran = $_POST['lampiran'];
        $tanggal_surat = $_POST['tanggal_surat'];
        $instansi = $_POST['instansi'];
        $tanggal_diterima = $_POST['tanggal_diterima'];
        $sifat_surat = $_POST['sifat'];

        // Variabel File
        $nama_file = str_replace(" ","_",$_FILES['myFile']['name']);

        // $ekstensi= Explode('.', $nama_file);
        // $ekstensi_file = Strtolower(End($ekstensi));
        // $size_file = $_FILES['berkas']['Size'];
        
        $file_tmp = $_FILES['myFile']['tmp_name'];

        // Variabel Location File
        $dir = "../../Assets/File/";
        $conn_dir = $dir.$nama_file;

        // Save the File
        $upload_file = Move_uploaded_file($file_tmp, $conn_dir);

        // Upload to Database
        $sql = "INSERT INTO data_surat (nomer_surat, nomer_agenda, sifat, lampiran, perihal, tanggal_surat, tanggal_diterima, instansi_pengirim, status, link) VALUE ('$nomer_surat', '$nomer_agenda','$sifat_surat', '$lampiran', '$perihal', '$tanggal_surat', '$tanggal_diterima','$instansi','$status','$conn_dir')";
        $query = mysqli_query($db, $sql);
        $query2 = update_status_surat($nomer_surat, $status, $db);

        // apakah query simpan berhasil?
        if( $query && $query2) {
            // kalau berhasil alihkan ke halaman index.php dengan status=g005
            header('Location: ..\..\src\Kasubag\surat-masuk.php?status=g005');
            die();
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            echo "<script>alert('Upload Surat Gagal!!!')</script>";
        }
    }else{
        echo "data tidak bisa di upload";
    }
}

// Status Marker for Every User
switch($_SESSION['status']){
    case "Pengelola Surat Dinas":
        $status = "p_surat_dinas";
        upload_surat($status,$db); 
        break;

    case "Kasubag":
        $status = "kasubag"; 
        upload_surat($status,$db); 
        break;

    case "Sekretaris Dinas":
        $status = "sekdis"; 
        upload_surat($status,$db); 
        break;

    case "Kepala Dinas":
        $status = "kepdis"; 
        upload_surat($status,$db); 
        break;

    case "Pengelola Surat Bidang":
        $status = "p_surat_bidang"; 
        upload_surat($status,$db); 
        break;

    case "Kepala Bidang":
        $status = "kabid"; 
        upload_surat($status,$db); 
        break;

    case "Staff":
        $status = "staff"; 
        upload_surat($status,$db); 
        break;
    
    default:
        echo "level users tidak ditemukan!";
}
?>