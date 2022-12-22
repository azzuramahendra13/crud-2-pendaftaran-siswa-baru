<?php 
    include("config.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = mysqli_query($db, "DELETE FROM calon_siswa WHERE id = $id");
        
        if ($query) {
            header("Location: list-siswa.php");
        } else {
            die("Gagal menghapus...");
        }
        
    } else {
        die("Akses dilarang...");
    }

?>