<?php
include('crudmk.php');

if (isset($_POST['submit'])) {
    $tombol = $_POST['submit'];
    $kode = $_POST['kode'];

    if ($tombol == 'OK') {
        $hasil = hapusMtKuliah($kode);
        // Sesuai alur soal, setelah sukses kita arahkan ke halaman utama daftar matakuliah
        header("Location: bacamk.php");
        exit;
    } elseif ($tombol == 'Batal') {
        header("Location: hapusmk.php");
        exit;
    }
}
?>