
<?php
    $nama =$_POST['nama'];
    $jenis =$_POST['jenis'];
    $seri =$_POST['seri'];
    $merk =$_POST['merk'];
    $negara =$_POST['negara'];
    $harga =$_POST['harga'];
    $jumlah =$_POST['jumlah'];

    $tgl =$_POST['angka_hari'];
    $bln =$_POST['bulan'];
    $thn =$_POST['tahun'];
    $angka_tanggal = mktime(0, 0, 0, $bln, $tgl, $thn);
    $tanggal = date("l, j F Y" ,$angka_tanggal);

    $total_harga= $harga * $jumlah;

    $kode_barang = [
        $jenis,
        str_pad($seri,6,"0",STR_PAD_LEFT),
        substr($merk,0,3),
        substr($negara,0,3),
    ];

    $kode = implode("/",$kode_barang);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width: 30%">
        <h2>Hasil Input Data Barang</h2>
    <table>
        <tr>
            <td>kode</td>
            <td>:</td>
            <td><?php echo $kode; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?php echo $jenis; ?></td>
        </tr>
        <tr>
            <td>Seri</td>
            <td>:</td>
            <td><?php echo $seri; ?></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td>:</td>
            <td><?php echo $merk; ?></td>
        </tr>
        <tr>
            <td>Negara</td>
            <td>:</td>
            <td><?php echo $negara; ?></td>
        </tr>
        <tr>
            <td>Tanggal Pembuatan</td>
            <td>:</td>
            <td><?php echo $tanggal; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($harga, 0, ', ', '.'); ?></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><?php echo $jumlah; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($total_harga, 0, ', ', '.'); ?></td>
        </tr>
        </fieldset>
    </table>
</body>
</html>
<!--
   echo "<h2>Hasil Input Data Barang</h2>";
    echo "Nama Barang: " . $nama . "<br>"  ;
    echo "Jenis Barang: " . $jenis . "<br>";
    echo "Seri Barang: " . $seri . "<br>";
    echo "Merk Barang: " . $merk . "<br>";
    echo "Negara Pembuat: " . $negara . "<br>";
    echo "Tanggal Pembuatan: " . $tanggal_lengkap . "<br>";
    echo "Harga Barang: " . $harga . "<br>";
    echo "Stok Barang: " . $jumlah . "<br>";
    echo "Total Harga: " . number_format($total_harga, 0, ', ', '.') . "<br>";