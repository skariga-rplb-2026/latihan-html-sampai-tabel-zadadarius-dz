<?php
include('crudmhs.php');

if (isset($_POST['simpan'])) {
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $jurusan = $_POST['jurusan'];

    $hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);

    header("Location: bacamhs.php");
    exit;
} else {
    header("Location: bacamhs.php");
    exit;
}
?>