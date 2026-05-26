<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width: 30%">
    <h1>Data Barang</h1><br>
    <hr style="height:1px; margin-left: 0; width: 100%; border:none; background-color: black;" >
    <form action="output.php" method="POST">
        Nama Barang<br>
        <input type="text" name="nama"><br>

        Jenis<br>
        <select name="jenis" id="" class="dropdown">
            <option value=""> -- Pilih -- </option>
            <option value="PC">PC Komputer</option>
            <option value="LP">Laptop</option>
            <option value="PR">Peripheral</option>
            <option value="SP">Smart Phone</option>
            <option value="IP">I-Pad</option>
    </select><br>

    Nomor Seri <br>
    <input type="text" name="seri"><br>

    Merk <br>
    <input type="text" name="merk"><br>

    Negara Pembuat <br>
    <input type="text" name="negara"><br>

    <fieldset>
        <legend>Tanggal Pembuatan</legend>
        Tgl
<select name="angka_hari">
    <?php
    for($hari=1;$hari<=31;$hari++){
        $htgl = str_pad($hari,2,"0",STR_PAD_LEFT);
        echo "<option value='$htgl'>$htgl</option>" ;
    }
    ?>
    </select>
Bulan
<select name="bulan">
    <?php
    for($bulan=1;$bulan<=12;$bulan++){
        $bln = str_pad($bulan,2,"0",STR_PAD_LEFT);
        echo "<option value='$bln'>$bln</option>" ;
    }
    ?>
    </select>
Tahun
<select name="tahun">
    <?php
    $tahun_sekarang = date("Y") ;
    $tahun_awal = $tahun_sekarang-10 ;
    $tahun_akhir = $tahun_sekarang+10 ;
    for($tahun=$tahun_akhir;$tahun>=$tahun_awal;$tahun--){
        echo "<option value='$tahun'>$tahun</option>" ;
    }
    ?>
    </select>
    </fieldset>

    Harga Barang <br>
    Rp. <input type="text" name="harga"><br>

    Jumlah Stok <br>
    <input type="text" name="jumlah"><br>

    <hr style="height:1px; margin-left: 0; width: 100%; border:none; background-color: black;" >

    <input type="submit" value="Submit" />
    <input type="reset" value="Reset" />
</fieldset>
</body>
</html>