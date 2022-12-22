<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <h3>Formulir Pendaftaran Siswa Baru</h3>

    <form action="proses-pendaftaran.php" method="POST">
        <table cellpadding="4" style="border: 1px solid black; padding: 1% 10% 1% 1%;">
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama" placeholder="Nama lengkap"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
                <td>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </td>
                
            </tr>
            <tr>
                <td><label for="agama">Agama: </label></td>
                <td><select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="sekolah_asal">Sekolah Asal: </label></td>
                <td><input type="text" name="sekolah_asal" placeholder="Nama sekolah"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Daftar" name="daftar"></td>
            </tr>
        </table>
    </form>
</body>
</html>