<?php
require 'fungsi.php';
$mahasiswa = tampildata("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa | WEB INFORMATIKA 2026</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
             <td><a href="index.php">Home</a></td>
             <td><a href="profile.php">Profile</a></td>
             <td><a href="contact.php">Contact</a></td>
             <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <h3>Data Mahasiswa</h3>
    
    <a href="inputdata.php"><button>Tambah Data</button></a>
    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td align="center"><?= $no++; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["no_hp"]; ?></td>
                <td align="center">
                    <img src="assets/images/<?= $row["foto"]; ?>" width="70px" height="90px"/>
                </td>
                <td align="center">
                    <a href="ubahdata.php?id=<?= $row["id"]; ?>"><button>Edit</button></a>
                    <a href="hapusdata.php?id=<?= $row["id"]; ?>"><button>Hapus</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>