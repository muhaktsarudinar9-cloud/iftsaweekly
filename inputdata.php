<html>
    <head>
        <title>
            WEB INFORMATIKA C 2026    
        </title>
    </head>
    <body>
        <h1>
            WEB INFORMATIKA C 2026
        </h1>
        <hr>
            <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>
                    <a href="index.php"> Home </a>
                </td> 
                <td>
                    <a href="profile.php"> Profile </a>
                </td>
                <td>
                    <a href="contact.php"> Contact </a>
                </td>
                <td>
                    <a href="mahasiswa.php"> Data Mahasiswa </a>
                </td>
            </tr>
        </table>
        <h2>Input Data Mahasiswa</h2>
        <form>
            <table cellspacing="0" cellpadding="10">
                <tr>
                    <td><label for="nama"> Nama</label> </td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"/></td>
                </tr>
                <tr>
                    <td><label for="uts"> UTS</label> </td>
                    <td>:</td>
                    <td><input type="number" name="uts" id="uts"/></td>
                </tr>
                    <td><label for="uas"> UAS</label> </td>
                    <td>:</td>
                    <td><input type="number" name="uas" id="uas"/></td>
                <tr>
                    <td><label for="tugas"> Tugas</label> </td>
                    <td>:</td>
                    <td><input type="number" name="tugas" id="tugas"/></td>
                </tr>
                <tr>
                    <td><label for="uts"> Foto</label> </td>
                    <td>:</td>
                    <td><input type="file" name="foto" id="foto"/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Kirim Data">
        </form>
        <hr>
        <td></td>
    </body>
</html>

            <table cellspacing="0" cellpadding="10">
        <tr>
            <td><label for="nama">Nama:</label></td>
            <td><input type="text" id="nama" name="nama" required></td>
        </tr>
        <tr>
            <td><label for="nim">NIM:</label></td>
            <td><input type="number" id="nim" name="nim"></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" id="password" name="password"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>
        <tr>
            <td><label for="no_hp">No HP:</label></td>
            <td><input type="tel" id="no_hp" name="no_hp"></td>
        </tr>
        <tr>
            <td><label for="website">Website Pribadi:</label></td>
            <td><input type="url" id="website" name="website"></td>
        </tr>
        <tr>
            <td><label for="tanggal_lahir">Tanggal Lahir:</label></td>
            <td><input type="date" id="tanggal_lahir" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td><label for="warna">Warna Favorit:</label></td>
            <td><input type="color" id="warna" name="warna"></td>
        </tr>
        <tr>
            <td><label for="kepuasan">Tingkat Kepuasan:</label></td>
            <td><input type="range" id="kepuasan" name="kepuasan" min="0" max="100"></td>
        </tr>
        <tr>
            <td><label>Jenis Kelamin:</label></td>
            <td><input type="radio" id="lk" name="jk" value="Laki-laki"> <label for="lk" style="width: auto;">Laki-laki</label></td>
            <td><input type="radio" id="pr" name="jk" value="Perempuan"> <label for="pr" style="width: auto;">Perempuan</label></td>
        </tr>
        <tr>
            <td><label>Hobi:</label>
            <td><input type="checkbox" id="hobi1" name="hobi" value="Sepak bola"> <label for="hobi1" style="width: auto;">Sepak Bola</label></td>
            <td><input type="checkbox" id="hobi2" name="hobi" value="Futsal"> <label for="hobi2" style="width: auto;">Futsal</label></td>
            <td><input type="checkbox" id="hobi3" name="hobi" value="Mancing"> <label for="hobi3" style="width: auto;">Mancing</label></td>
        </tr>
        <tr>
            <td><label for="foto">Upload Foto:</label></td>
            <td><input type="file" id="foto" name="foto" accept="image/*"></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td><textarea id="alamat" name="alamat" rows="4" cols="30"></textarea></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan">
                <option value="">-- Pilih Jurusan --</option>
                <option value="Informatika">Informatika</option>
                <option value="Sistem Informasi">Teknik Mesin</option>
                <option value="Teknik Elektro">Teknik Sipil</option>
            </select></td>
        </tr>
            <td><button type="submit">Submit</button></td>
        </tr>