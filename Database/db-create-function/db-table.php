<?php

    include ("Database\connection-function\config.php");

    $sql= "CREATE TABLE IF NOT EXISTS data_surat (
                nomer_surat VARCHAR(15) PRIMARY KEY,
                sifat VARCHAR(255) NOT NULL,
                title VARCHAR(255) NOT NULL,
                lampiran TINYINT NULL,
                perihal VARCHAR(255) NOT NULL,
                tanggal_surat VARCHAR(255) NOT NULL,
                instansi_pengirim VARCHAR(255) NOT NULL,
                status VARCHAR(255) NOT NULL,
                link VARCHAR(2000) NOT NULL
    )";

    $query = mysqli_query($db, $sql);
    
    // if( $query ) {
    //     // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    //     echo "Tabel berhasil dibuat";
    // } else {
    //     // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    //     echo "Tabel gagal dibuat";
    // }

?>