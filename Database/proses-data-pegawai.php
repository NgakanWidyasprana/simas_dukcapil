<?php


    $sql = "SELECT * FROM identitas_pegawai";
    $query = mysqli_query($db, $sql);

    while($pegawai = mysqli_fetch_array($query)){
        echo "<tr>";
            echo "<td>".$pegawai['NIP']."</td>";
            echo "<td>".$pegawai['nama']."</td>";
            echo "<td>".$pegawai['alamat']."</td>";
            echo "<td>".$pegawai['jenis_kelamin']."</td>";
            echo "<td>".$pegawai['agama']."</td>";
            echo "<td>".$pegawai['asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$pegawai['NIP']."'>Edit</a> || ";
            echo "<a href='hapus.php?id=".$pegawai['NIP']."'>Hapus</a>";
            echo "</td>";
            
        echo "</tr>";
    }

?>