<?php 
        
    include("..\Database\connection-function\config.php"); 

    session_start();
    $_SESSION["admin"]=$_GET['status']; 
?>



<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Pegawai Baru</title>
</head>

<body>
    <header>
        <h3>Selamat Datang, <?php echo $_SESSION['admin'];?> </h3>
        <h3>Pegawai Yang Sudah Mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Data</a>
        <h12> || </h12>
        <a href="..\index.php"> Home </a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Dinas Bagian</th>
                <th>Status User</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php include("..\Database\process-function\proses-data-pegawai.php");?>
        </tbody>
    </table>

    <p>Jumlah User: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>