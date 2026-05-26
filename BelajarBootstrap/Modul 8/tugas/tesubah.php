<?php
include('crudmhs.php');

$nim = "000";
$nama = "Laptop";
$kelamin = "L";
$jurusan = "TI";
$hasil = ubahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil == true){
    echo "Berhasil";
}else{
    echo "Error";
}
?>