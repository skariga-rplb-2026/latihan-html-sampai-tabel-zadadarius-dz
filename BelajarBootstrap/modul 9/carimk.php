<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cari Mata Kuliah</title>
</head>
<body>

    <h2>Cari Mata Kuliah</h2>
    <form method="POST" action="">
        Kode: <input type="text" name="kode" value="<?php echo isset($_POST['kode']) ? $_POST['kode'] : ''; ?>" required>
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php
    if (isset($_POST['cari'])) {
        include 'crudmtkuliah.php';
        $kode = $_POST['kode'];
        
        // Memanggil fungsi dari crudmtkuliah.php
        $data = cariMtKuliah($kode);

        echo "<br>";
        if ($data !== null) {
            // Tampilan (a) jika ditemukan
            echo "<h3 style='color:blue;'>Data Mata Kuliah</h3>";
            echo "Kode : " . $data['kode'] . "<br>";
            echo "Nama : " . $data['nama'] . "<br>";
            echo "Sks : " . $data['sks'] . "<br>";
        } else {
            // Tampilan (b) jika tidak ditemukan
            echo "<p>Data tidak ditemukan</p>";
        }
    }
    ?>

</body>
</html>