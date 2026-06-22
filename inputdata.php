<?php
require 'fungsi.php';

if (isset($_POST["kirim"])) {
    if (tambahdata($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambah!');
                document.location.href = 'mahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambah!');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <h1>WEB INFORMATIKA C 2026</h1>
    <hr>
    
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td> 
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    
    <h2>Input Data Mahasiswa</h2>
    
    <form action="inputdata.php" method="POST">
        <table cellspacing="0" cellpadding="10">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="text" name="nim" id="nim" required /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td>
                    <select id="jurusan" name="jurusan" required>
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="no_hp">NO. HP</label></td>
                <td>:</td>
                <td><input type="text" name="no_hp" id="no_hp" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="kirim">Kirim Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>