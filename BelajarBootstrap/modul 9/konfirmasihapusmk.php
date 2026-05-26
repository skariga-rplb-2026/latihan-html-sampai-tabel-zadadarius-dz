<?php
if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];
} else {
    header("Location: hapusmk.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Hapus Matakuliah</title>
</head>
<body>
    <h2>Apakah anda akan menghapus matakuliah dengan kode: <?php echo $kode; ?>?</h2>
    
    <form method="POST" action="proseshapusmk.php">
        <input type="hidden" name="kode" value="<?php echo $kode; ?>">
        <button type="submit" name="submit" value="OK">OK</button>
        <button type="submit" name="submit" value="Batal">Batal</button>
    </form>
</body>
</html>