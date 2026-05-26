<?php
include('crudmk.php');

if (isset($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks  = $_POST['sks'];

    $hasil = tambahMtKuliah($kode, $nama, $sks);
    if ($hasil > 0) {
        header("Location: bacamk.php");
        exit;
    } else {
        echo "Gagal menambahkan data matakuliah.";
    }
}
?>