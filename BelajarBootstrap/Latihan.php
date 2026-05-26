<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php</title>
</head>
<body>
    <h1>Latihan PHP</h1>
    <?php 
    //tanda untuk memberikan komentar satu baris
        echo "<h1>Selamat Datang..</h1>";
        echo "Program PHPku yang pertamaku<br>";
        /*
            tanda untuk memberikan komentar
            komentar ini lebih dari satu baris
        */
        $a = 20;
        $b = 5;
        $c = $a * $b;
        $d =$c / $b;
        $e = $d-$b;
        echo "$c \t $d \t $e";
        echo "<br />";
        // Contoh penggunaan .
        $a = "Yogyakarta ";
        $a = $a. "Kotaku";
        echo "$a <br />";
        // Contoh penggunaan .=
        $b = "STMIK AKAKOM ";
        $b .= "Kampusku";
        echo "$b";

        $beli1 = "5apel";
        $beli2 = "7jeruk";
        $hasil1 = $beli1 + $beli2;
        $hasil2 = $beli1 . $beli2;
        echo "Hasil1 : $ hasil1 <br> Hasil2 : $hasil2";

         $a="5";
         $b="2.5";
         $komentar="Selamat Datang";
         echo ("Nilai variabel a adalah = $a <br>");
         //variabel bertipe integer
         echo ("Nilai variabel b adalah = $b <br>");
         //variabel bertipe real
         echo ("Nilai variabel komentar adalah = $komentar<br>");
         //variabel bertipe string 
         $hasil=$a+$b;
         echo ("Hasil jumlah a dan b adalah = $hasil <br>");
         //variabel bertipe double
         $nama = "STMIK AKAKOM";
         $garis = "====================================";
         echo "<p>";
         echo $garis."<br>";
         echo $komentar. "Di Lab ". $nama. "<br>Belajar dengan giat ya... <br>";
         echo $garis."<br>";

         $ia = 4; //decimal
         $ib = -20; // decimal negatif
         $ic = 0232; // octal 
         $id = 0x5DF; // hexadecimal
         $jumlah = $ia + 3;
         //Single quoted
         echo 'single queted <br />';
         echo 'Budi berkata, "I\'11 do the PHP code" <br />';
         echo 'PHP ini terletak di C:\\php\ <br />';
         echo 'Variabel seperti $jumlah tidak akan ditulis valuenya <br />';
         echo '=====================================<br/>';
         //Double queted
         echo "double queted <br />";
         echo "Budi berkata, 'I\"11 do the PHP code' <br />";
         echo "PHP ini terletak di C:\php\<br />";
         echo "Variabel \$jumlah mempunyai value $jumlah </br>";

         
    ?>
</body>
</html>