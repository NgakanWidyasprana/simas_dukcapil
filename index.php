
<?php include("Database\connection-function\cek-session.php"); ?>
<?php include("Database\db-create-function\db-table.php"); ?>

<?php
    /*
    <!DOCTYPE html>
    <html>

        <head>
            <title>Pendaftaran Pegawai Baru | PUSPEM BADUNG</title>    
        </head>

        <body>
            <header>
                <h3>Selamat Datang, <?php echo $_SESSION['status']?></h3>
                <h1>PUSPEM BADUNG</h1>
            </header>

            <h4>Menu</h4>
            <nav>
                <ul>
                    <?php
                        if($_SESSION['status']=='Admin'){
                            echo '<li><a href="Form\form-daftar.php">Daftar Pegawai Baru</a></li>';
                            echo '<li><a href="Form\form-list-pegawai.php">Data Pegawai</a></li>';
                        }else{
                            echo '<li><a href="Form\form-list-surat.php">Daftar Surat Masuk</a></li>';
                        }
                    ?>
                    <li><a href="Form\form-upload-surat.php">Upload Surat</a></li>
                </ul>
            </nav>
            <div class="input-group" style="Assets\CSS\style.css">
                <a href="Database\process-function\proses-logout.php" class="btn">Logout</a>
            </div>
            <?php include 'Database\addons-function\notif_daftar.php';?>
        </body>
    </html>
    */
?>