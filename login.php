<?php
require 'fungsi.php';

// Jika admin sudah berhasil login sebelumnya, langsung lempar ke halaman mahasiswa
if (isset($_SESSION["login"])) {
    header("Location: mahasiswa.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cari username di database
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Cek password sesuai dengan isi tabel user HeidiSQL kemarin
        if ($password === $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $row["username"];

            echo "<script>
                    alert('Login Berhasil! Selamat Datang.');
                    window.location.href='mahasiswa.php';
                  </script>";
            exit;
        }
    }
    
    // Flag error jika username/password salah
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem | WEB INFORMATIKA 2026</title>
    <style>
        .login-table td { padding: 6px 10px; }
        .btn-login { margin-top: 10px; padding: 6px 15px; cursor: pointer; }
        .error-msg { color: red; font-style: italic; }
    </style>
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
    <hr>
    
    <h2>Login Admin</h2>

    <?php if (isset($error)) : ?>
        <p class="error-msg">Username atau Password salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <table class="login-table" cellspacing="0">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="login" class="btn-login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>