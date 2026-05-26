<?php
include 'koneksidb.php';

function  getmahasiswa($koneksi) {
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa ");
    $data = array();
    while ($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }
    return $data;
}

$data = getSiswa($koneksi);
?>