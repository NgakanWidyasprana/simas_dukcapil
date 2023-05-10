<?php include("..\Database\connection-function\cek-session.php"); ?>
<?php include("..\Database\process-function\get_old_data.php");?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Data Pegawai</title>
    </head>

    <body>
        <header>
            <h3>Formulir Edit Data Pegawai</h3>
        </header>
        <form action= <?php echo "..\Database\process-function\proses-edit.php?id=".$pegawai['NIP']?> method="POST">
            <fieldset>
                <label for="NIP">NIP: </label>
                <input name="NIP" value="<?php echo $pegawai['NIP'] ?>" />
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $pegawai['nama'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $pegawai['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <?php $jk = $pegawai['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $pegawai['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="asal">Asal Pegawai: </label>
                <input type="text" name="asal" placeholder="asal pegawai" value="<?php echo $pegawai['asal'] ?>" />
            </p>
            <p>
                <label for="jobdesk">Jobdesk: </label>
                <?php $jobdesk = $pegawai['jobdesk']; ?>
                <select name="jobdesk">
                    <option <?php echo ($jobdesk == 'Admin') ? "selected": "" ?>>Admin</option>
                    <option <?php echo ($jobdesk == 'Pengelola Surat Dinas') ? "selected": "" ?>>Pengelola Surat Dinas</option>
                    <option <?php echo ($jobdesk == 'Kasubag') ? "selected": "" ?>>Kasubag</option>
                    <option <?php echo ($jobdesk == 'Sekretaris Dinas') ? "selected": "" ?>>Sekretaris Dinas</option>
                    <option <?php echo ($jobdesk == 'Kepala Dinas') ? "selected": "" ?>>Kepala Dinas</option>
                    <option <?php echo ($jobdesk == 'Pengelola Surat Bidang') ? "selected": "" ?>>Pengelola Surat Bidang</option>
                    <option <?php echo ($jobdesk == 'Kepala Bidang') ? "selected": "" ?>>Kepala Bidang</option>
                    <option <?php echo ($jobdesk == 'Staff') ? "selected": "" ?>>Staff</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
            
            </fieldset>
        </form>
    </body>
</html>