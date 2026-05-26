<?php
include('crudmhs.php');

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $data = cariMhs($nim);
    
    if ($data == null) {
        echo "Data mahasiswa tidak ditemukan.";
        exit;
    }
} else {
    header("Location: bacamhs.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Ubah Data Mahasiswa</title>
</head>
<body>

    <h2>Form Ubah Data Mahasiswa</h2>
    <form method="post" action="prosesubah.php">
        
        NIM: <input type="text" name="nim" value="<?php echo $data['nim']; ?>" readonly><br><br>
        
        Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br><br>
        
        Jenis Kelamin: <br>
        <input type="radio" name="kelamin" value="L" <?php echo ($data['kelamin'] == 'L') ? 'checked' : ''; ?>> Laki-laki
        <input type="radio" name="kelamin" value="P" <?php echo ($data['kelamin'] == 'P') ? 'checked' : ''; ?>> Perempuan
        <br><br>
        
        Jurusan: <br>
        <input type="radio" name="jurusan" value="TI" <?php echo ($data['jurusan'] == 'TI') ? 'checked' : ''; ?>> TI
        <input type="radio" name="jurusan" value="SI" <?php echo ($data['jurusan'] == 'SI') ? 'checked' : ''; ?>> SI
        <input type="radio" name="jurusan" value="MI" <?php echo ($data['jurusan'] == 'MI') ? 'checked' : ''; ?>> MI
        <input type="radio" name="jurusan" value="TK" <?php echo ($data['jurusan'] == 'TK') ? 'checked' : ''; ?>> TK
        <input type="radio" name="jurusan" value="KA" <?php echo ($data['jurusan'] == 'KA') ? 'checked' : ''; ?>> KA
        <br><br>
        
        <button type="submit" name="simpan">Simpan Perubahan</button>
        <a href="bacamhs.php">Batal</a>
    </form>

</body>
</html>