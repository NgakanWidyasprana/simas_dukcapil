<?php

    if(isset($_GET['status'])){
        if($_GET['status']=='sukses'){
            echo "<script>alert('Selamat, pegawai berhasil terdaftar!')</script>";
        }

        if($_GET['status']=='gagal'){
            echo "<script>alert('Maaf, pegawai gagal terdaftar!')</script>";;
        }

        if($_GET['status']=='g005'){
            echo "<script>alert('Upload Surat Berhasil!!')</script>";
        }
    }
    
?>