<?php 
    include("config.php");

    if (!isset($_GET['id'])) {
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM calon_siswa WHERE id = $id");
    $siswa = mysqli_fetch_assoc($query);
    
    if (!mysqli_num_rows($query)) {
        die("Data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa Baru | SMK Coding</title>
</head>
<body>
    <h3>Formulir Edit Siswa</h3>

    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id']?>">

        <table cellpadding="4" style="border: 1px solid black; padding: 1% 10% 1% 1%;">
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama']?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
                <td>
                    <?php $jk = $siswa['jenis_kelamin'] ?>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                </td>
                
            </tr>
            <tr>
                <td><label for="agama">Agama: </label></td>
                <td>
                    <?php $agama = $siswa['agama'] ?>
                    <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                </select>
            </td>
            </tr>
            <tr>
                <td><label for="sekolah_asal">Sekolah Asal: </label></td>
                <td><input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>