<?php
include('crudmk.php');

if (isset($_POST['submit'])) {
    $tombol = $_POST['submit'];

    if ($tombol == 'Ubah') {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $sks  = $_POST['sks'];

        ubahMtKuliah($kode, $nama, $sks);
        
        header("Location: bacamk.php");
        exit;
        
    } elseif ($tombol == 'Batal') {
        header("Location: bacamk.php");
        exit;
    }
} else {
    header("Location: bacamk.php");
    exit;
}
?>