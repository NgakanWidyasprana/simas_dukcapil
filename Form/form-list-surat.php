<?php include("..\Database\connection-function\config.php"); ?>
<?php include("..\Database\connection-function\cek-session.php"); ?>

<!DOCTYPE Html>
<Html>
<Head>
    <Title>Upload Dan Download File PDF Dengan PHP Dan MySQL</Title>
</Head>
<Body>
    <H2 Style="Text-Align: Left;">Tabel Upload/Download File (PDF)</H2>
    <nav>
        <a href="form-upload-surat.php">[+] Tambah Baru</a>
        <h12> || </h12>
        <a href="..\index.php"> Home </a>
    </nav>

    <br>

    <table border="1" Style="Text-Align: Center;">
        <thead>
            <tr>
                <th>Nomer Surat</th>
                <th>Sifat</th>
                <th>Judul Surat</th>
                <th>Lampiran</th>
                <th>Perihal</th>
                <th>Tanggal Surat</th>
                <th>Instansi Pengirim</th>
                <!-- <th>Status</th> -->
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php include("..\Database\process-function\proses-data-surat.php");?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($total)?></p>
    
</Body>
</Html>