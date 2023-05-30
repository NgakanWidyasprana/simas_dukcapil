<?php 

    if(!$_SESSION['admin']="Admin Ganteng"){
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Pegawai Baru</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="..\Database\process-function\proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>

        <p>
            <label for="NIP"> NIP: </label>
            <input name="NIP" placeholder="Masukan NIP"/>
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" placeholder="Masukan alamat rumah"></textarea>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
        </p>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>

        <p>
            <label for="asal">Asal Pegawai: </label>
            <input type="text" name="asal" placeholder="Asal pegawai" />
        </p>

        <p>
            <label for="jobdesk">Jobdesk: </label>
            <select name="jobdesk">
                <option>Admin</option>
                <option>Pengelola Surat Dinas</option>
                <option>Kasubag</option>
                <option>Sekretaris Dinas</option>
                <option>Kepala Dinas</option>
                <option>Pengelola Surat Bidang</option>
                <option>Kepala Bidang</option>
                <option>Staff</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>
</body>
</html>