<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <form method="POST" action="prosestambah.php">
        <table border="0" cellpadding="5">
            <tr>
                <td>NIM:</td>
                <td><input type="text" name="nim" size="20" required></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" size="40" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="kelamin" value="L"> Laki-laki
                    <input type="radio" name="kelamin" value="P"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <input type="radio" name="jurusan" value="TI"> TI
                    <input type="radio" name="jurusan" value="SI"> SI
                    <input type="radio" name="jurusan" value="MI"> MI
                    <input type="radio" name="jurusan" value="TK"> TK
                    <input type="radio" name="jurusan" value="KA"> KA
                </td>
            </tr>
           <tr>
                <td></td>
                <td>
                    <button type="submit" name="tambah">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>