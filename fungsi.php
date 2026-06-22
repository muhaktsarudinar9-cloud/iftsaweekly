<?php
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


// 3. FUNGSI TAMBAH DATA (CREATE)
function tambahdata($data)
{
    global $koneksi;
    
    $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
    $nim = mysqli_real_escape_string($koneksi, $data["nim"]);
    $jurusan = mysqli_real_escape_string($koneksi, $data["jurusan"]);
    $email = mysqli_real_escape_string($koneksi, $data["email"]);
    $no_hp = mysqli_real_escape_string($koneksi, $data["no_hp"]);
    $foto = ""; 

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
              VALUES ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}


// 4. FUNGSI UBAH DATA (UPDATE) -> "Ini fungsi baru yang ditambahkan di bawah"
function ubahdata($data)
{
    global $koneksi;

    $id = $data["id"];
    $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
    $nim = mysqli_real_escape_string($koneksi, $data["nim"]);
    $jurusan = mysqli_real_escape_string($koneksi, $data["jurusan"]);
    $email = mysqli_real_escape_string($koneksi, $data["email"]);
    $no_hp = mysqli_real_escape_string($koneksi, $data["no_hp"]);
    $foto = ""; 

    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                nim = '$nim',
                jurusan = '$jurusan',
                email = '$email',
                no_hp = '$no_hp',
                foto = '$foto'
              WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>