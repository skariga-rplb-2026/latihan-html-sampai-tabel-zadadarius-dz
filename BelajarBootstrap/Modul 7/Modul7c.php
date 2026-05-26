<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristasi Peserta</title>
</head>
    <body>
        <h2>Regristasi Peserta Kursus</h2> 
    <table> 
    <form method="post"  
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <tr> 
    <td>Nama:</td><td><input type="text" name="nama" size="30"></td> 
    </tr> 
    <tr> 
    <td>E-mail</td><td><input type="text" name="email" size="30"></td> 
    </tr> 
    <tr><td>Nama Kursus</td> 
    <td> 
    <input type="checkbox" name="kursus[]" value="csharp" >C#<br> 
    <input type="checkbox" name="kursus[]" value="javascript" >JavaScript <br> 
    <input type="checkbox" name="kursus[]" value="perl" />Perl<br> 
    <input type="checkbox" name="kursus[]" value="php" />PHP<br> 
    </tr> 
    <tr><td>&nbsp;</td><td><input type="submit" name="submit" 
    value="Simpan"</td></tr> 
    </form> 
    </table>
    <?php
    if (isset($_POST['submit'])){
        $siap_tampil = true;
        $pesan_error = "";

    if (array_key_exists('nama', $_POST)) 
        $nama = trim($_POST['nama']);
        if (empty($nama)) {
        $pesan_error .= "<span style='color:red'>Nama belum diisi</span><br>";
        $siap_tampil = false;
    }

   if (array_key_exists('email', $_POST));
    $email = trim($_POST['email']);
    if (empty($email)) {
        $pesan_error .= "<span style='color:red'>E-mail belum diisi</span><br>";
        $siap_tampil = false;
    }

    if (array_key_exists('kursus', $_POST)) {
        $kursus = $_POST['kursus']; 
        $jumlah = count($kursus); 

        $daftar_harga = [
            "csharp" => 1000000,
            "javascript" => 500000,
            "perl" => 800000,
            "php" => 1100000
        ];

        
        $total_biaya = 0;
        foreach ($kursus as $pilih) {
            if (array_key_exists($pilih, $daftar_harga)) {
                $total_biaya += $daftar_harga[$pilih];
            }
        }
        $biaya = $total_biaya;
        } else {
            $pesan_error .= "<span style='color:red'>Kursus belum dipilih</span><br>";
            $siap_tampil = false;
        }
        if ($siap_tampil) {
        echo "<br>Terimakasih data anda telah diterima.<br>";
        echo "Kursus yang anda pilih sebanyak " . $jumlah . " buah yaitu:<br>";
        echo "<ul>";
        foreach ($kursus as $pilih){
            echo "<li>" . $pilih . "</li>";
        }
        echo "</ul>";
        echo "Biaya kursus sebesar Rp. " . number_format($total_biaya, 0, ',', '.') . ",-";
        }else {
        $pesan_error .= "<span style='color:red'>Data belum diisi dengan benar</span><br>";
        echo $pesan_error;
    }
    }
?>
</body>
</html>