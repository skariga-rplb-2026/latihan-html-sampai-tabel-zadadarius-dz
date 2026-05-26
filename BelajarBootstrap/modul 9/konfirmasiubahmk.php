<?php
include('crudmk.php');

if (isset($_GET['kode']) && !empty($_GET['kode'])) {
    $kode = $_GET['kode'];
    $data = cariMtKuliah($kode); 
    
    if ($data == null) {
        echo "Data mata kuliah tidak ditemukan.";
        exit;
    }
} else {
    header("Location: bacamk.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengubahan Data Mata Kuliah</title>
    <style>
        form { line-height: 25px; font-family: sans-serif; }
        .label-text { display: inline-block; width: 110px; }
    </style>
</head>
<body>

    <h2>Pengubahan Data Mata Kuliah</h2>
    
    <form method="post" action="prosesubahmk.php">
        
        <span class="label-text">Kode</span> : 
        <input type="text" name="kode" value="<?php echo $data['kode']; ?>" readonly><br>
        
        <span class="label-text">Nama</span> : 
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" size="40" required><br>
        
        <span class="label-text">Sks</span> : 
        <input type="text" name="sks" value="<?php echo $data['sks']; ?>" size="5" required><br><br>
        
        <button type="submit" name="submit" value="Ubah">Ubah</button>
        <button type="submit" name="submit" value="Batal">Batal</button>
        
    </form>

</body>
</html>