<?php
include('crudmhs.php');


$nim = '123110002';
$nama = 'Istiningsih';
$kelamin = 'P';
$jurusan = 'MI';

$hasil = tambahMhs($nim,$nama,$kelamin,$jurusan);
if($hasil > 0){
    header("Location: bacamhs.php");
} else {
    echo 'Gagal menambah record';
}
?>
    