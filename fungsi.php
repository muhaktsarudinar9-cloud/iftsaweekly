<?php
session_start(); // Wajib ditambahkan di baris pertama agar session login aktif!

$koneksi = mysqli_connect("localhost", "root", "", "tsaweekly");

if (!$koneksi) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}

function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahdata($data)
{
    global $koneksi;
    
    $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
    $nim = mysqli_real_escape_string($koneksi, $data["nim"]);
    $jurusan = mysqli_real_escape_string($koneksi, $data["jurusan"]);
    $email = mysqli_real_escape_string($koneksi, $data["email"]);
    $no_hp = mysqli_real_escape_string($koneksi, $data["no_hp"]);
    
    // Ambil data foto dari laptop
    $namaFile = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if ($namaFile != "") {
        $foto = $namaFile;
        move_uploaded_file($tmpName, 'assets/images/' . $namaFile);
    } else {
        $foto = "";
    }

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
              VALUES ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubahdata($data)
{
    global $koneksi;

    $id = $data["id"];
    $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
    $nim = mysqli_real_escape_string($koneksi, $data["nim"]);
    $jurusan = mysqli_real_escape_string($koneksi, $data["jurusan"]);
    $email = mysqli_real_escape_string($koneksi, $data["email"]);
    $no_hp = mysqli_real_escape_string($koneksi, $data["no_hp"]);
    
    $namaFile = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // Cek apakah user memilih foto baru
    if ($namaFile != "") {
        $foto = $namaFile;

        move_uploaded_file($tmpName, 'assets/images/' . $namaFile);
    } else {

        $query_lama = mysqli_query($koneksi, "SELECT foto FROM mahasiswa WHERE id = $id");
        $mhs_lama = mysqli_fetch_assoc($query_lama);
        $foto = $mhs_lama['foto'];
    }

    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                nim = '$nim',
                jurusan = '$jurusan',
                email = '$email',
                no_hp = '$no_hp',
                foto = '$foto'
              WHERE id = $id";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi) >= 0; 
}
?>