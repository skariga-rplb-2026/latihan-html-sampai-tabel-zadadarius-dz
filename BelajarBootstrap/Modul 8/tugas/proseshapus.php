<?php
include('crudmhs.php');

if (isset($_POST['submit'])) {
    $tombol = $_POST['submit'];
    $nim = $_POST['nim'];

    if ($tombol == 'OK') {
        $hasil = hapusMhs($nim);
        
        header("Location: bacamhs.php");
        
    } elseif ($tombol == 'Batal') {
        header("Location: hapusmhs.php");
    }
} else {
    header("Location: hapusmhs.php");
}
?>