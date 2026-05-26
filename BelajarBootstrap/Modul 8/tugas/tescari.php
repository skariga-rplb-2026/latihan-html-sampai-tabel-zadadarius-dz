<?php
include('crudmhs.php');

$kondisi = "jurusan = 'MI' AND kelamin = 'P'"; //contoh nim yang dicari
$data = cariSemuaMhs($kondisi);
if($data !== null) {
    foreach($data as $mhs) {
        $nim = $mhs['nim'];
        $nama = $mhs['nama'];
    echo "$nim, $nama <br>";
    }
}else {
    echo 'Tidak ada data';
}
?>