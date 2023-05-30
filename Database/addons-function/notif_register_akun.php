<?php

    if(isset($_GET['status'])){
        if($_GET['status']=='sukses'){
            echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        }
        
        if($_GET['status']=='g001'){
            echo "<script>alert('Maaf, registrasi gagal!')</script>";
        }
        
        if($_GET['status']=='g002'){
            echo "<script>alert('Woops! Email/Username Sudah Terdaftar.')</script>";
        }

        if($_GET['status']=='g003'){
            echo "<script>alert('Password Tidak Sesuai!')</script>";
        }

        if($_GET['status']=='g004'){
            echo "<script>alert('Email atau password Anda salah. Mohon diperiksa kembali!')</script>";
        }

        if($_GET['status']=='g006'){
            echo "<script>alert('ID/NIP pegawai sudah terdaftar, mohon periksa kembali!')</script>";
        }

        if($_GET['status']=='g007'){
            echo "<script>alert('Akun anda belum terdaftar, silahkan kontak admin!')</script>";
        }

        if($_GET['status']=='g008'){
            echo "<script>alert('NIK tidak terdaftar dalam database!!')</script>";
        }

        if($_GET['status']=='g009'){
            echo "<script>alert('Session error, session tidak ada/kosong')</script>";
        }
        if($_GET['status']=='g010'){
            echo "<script>alert('Session error, session tidak sesuai database')</script>";
        }
    }
    
?>