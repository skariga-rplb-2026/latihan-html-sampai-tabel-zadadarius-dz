<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>
<body>
    File Proses <hr/>
    <?php

    $harga = $_GET['harga'];
    $jumlah = $_GET['jumlah'];

    $total = $harga * $jumlah;

    $potongan = $total * 0.10;
    $total_setelah_diskon = $total - $potongan;

    echo "<h2>Hasil Perhitungan</h2>";
    echo "Harga : $harga <br>";
    echo "Jumlah : $jumlah <br>";
    echo "Total : $total <br>";
    echo "Potongan 10% : $potongan <br>";
    echo "Total Setelah Potongan : $total_setelah_diskon <br>";
    ?>
</body>
</html>