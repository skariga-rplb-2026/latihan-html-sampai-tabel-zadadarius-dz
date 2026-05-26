<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
</head>
<body>
     <h2>Form Tambah Matakuliah</h2>
    <form method="POST" action="prosestambahmk.php">
        Kode MK: <input type="text" name="kode" maxlength="5" required><br><br>
        Nama Matakuliah: <input type="text" name="nama" maxlength="30" required><br><br>
        SKS: <input type="number" name="sks" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
        <a href="bacamk.php">Batal</a>
    </form>
</body>
</html>