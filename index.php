<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <h3>Pendaftaran Siswa Baru</h3>
    <h1>SMK Coding</h1>
    <h3>Menu</h3>
    <ul>
        <li><a href="form-daftar.php">Daftar Baru</a></li>
        <li><a href="list-siswa.php">Pendaftar</a></li>
    </ul>

    <?php 
        if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
            echo "Pendaftaran siswa baru berhasil!";
        } else {
            echo "Pendaftaran gagal!";
        }
    ?>
</body>
</html>