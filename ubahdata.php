<?php
require 'fungsi.php';

$id = $_GET["id"];

$query = "SELECT * FROM mahasiswa WHERE id = $id";
$mhs = tampildata($query)[0];

if (ubahdata($_POST) > 0) {
    echo "<script> 
    window.location.href='mahasiswa.php';
    </script>";
} else {
    echo "<script> 
    window.location.href='mahasiswa.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa | WEB INFORMATIKA 2026</title>
    <style>
        .form-table td {
            padding: 6px 10px;
        }
        .form-table input {
            padding: 4px;
            width: 250px;
        }
        .btn-submit {
            margin-top: 15px;
            margin-left: 10px;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="Profile.php">Profile</a></td>
            <td><a href="content.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    
    <h2>Ubah Data Mahasiswa</h2>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

        <table class="form-table">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>" required /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Program Studi</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" value="<?= $mhs["email"]; ?>" required /></td>
            </tr>
            <tr>
                <td><label for="no_hp">NO. HP</label></td>
                <td>:</td>
                <td><input type="text" name="no_hp" id="no_hp" value="<?= $mhs["no_hp"]; ?>" required /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto" /></td>
            </tr>
        </table>
        <button type="submit" name="kirim" class="btn-submit">Ubah Data</button>
    </form>
    <br><hr>
</body>
</html>