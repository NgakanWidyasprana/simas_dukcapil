<?php

include("..\connection-function\config.php");
include("get_old_data.php");

# sCheck Data
// if(isset($_POST['simpan'])){
//     $id = $_POST['NIP'];
//     $nama = $_POST['nama'];
//     $alamat = $_POST['alamat'];
//     $jk = $_POST['jenis_kelamin'];
//     $agama = $_POST['agama'];
//     $asal = $_POST['asal'];
//     $tmp_id = $pegawai['NIP'];

//     echo $id, $nama, $alamat, $jk, $agama, $asal, $tmp_id;  
// }else{
//     die("Tidak Ada Data");
// }

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['NIP'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal = $_POST['asal'];
    $tmp_id = $pegawai['NIP'];
    $jobdesk = $_POST['jobdesk'];

    // buat query update
    $sql = "UPDATE identitas_pegawai SET NIP=$id, nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', asal='$asal', jobdesk='$jobdesk' WHERE NIP=$tmp_id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ..\..\Form\form-list-pegawai.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}

?>