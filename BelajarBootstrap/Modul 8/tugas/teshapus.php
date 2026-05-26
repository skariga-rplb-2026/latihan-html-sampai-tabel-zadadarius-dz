<?php
include('crudmhs.php');

$nim = $_GET['nim'];

$hasil = hapusMhs($nim);
if($hasil > 0){
    header("Location: bacamhs.php");
}else {
    echo 'Gagal menghapus record';
}
?>