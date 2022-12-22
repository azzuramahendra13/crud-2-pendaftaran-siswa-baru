<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <h2>Siswa yang sudah mendaftar</h2>
    <a href="form-daftar.php">[+] Tambah Baru</a> <br> <br>
    <table border="1" cellpadding="4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
        
        <?php 
            $query = mysqli_query($db, "SELECT * FROM calon_siswa");

            while ($hasil = mysqli_fetch_assoc($query)) {
                echo "<tr>";

                echo "<td>".$hasil['id']."</td>";
                echo "<td>".$hasil['nama']."</td>";
                echo "<td>".$hasil['alamat']."</td>";
                echo "<td>".$hasil['jenis_kelamin']."</td>";
                echo "<td>".$hasil['agama']."</td>";
                echo "<td>".$hasil['sekolah_asal']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$hasil['id']."'>Edit</a>";
                echo " | ";
                echo "<a href='hapus.php?id=".$hasil['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
        ?>
    </table>

    <?php
        echo "<p>Total: ".mysqli_num_rows($query)."</p>";
    ?>
</body>
</html>