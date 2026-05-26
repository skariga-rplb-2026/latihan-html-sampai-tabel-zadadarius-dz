<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database   = "Kevin_Akademik"; 

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function bacaSemuaMtKuliah() {
    global $koneksi;
    $sql = "SELECT * FROM matakuliah";
    return mysqli_query($koneksi, $sql);
}

function bacaMtKuliah($sql) {
    global $koneksi;
    return mysqli_query($koneksi, $sql);
}

function tambahMtKuliah($kode, $nama, $sks  ) {
global $koneksi;
    $sql = "INSERT INTO matakuliah values ('$kode', '$nama', '$sks')";
    $hasil = 0;
    if (mysqli_query($koneksi, $sql)) {
        $hasil = 1;
    }
    mysqli_close($koneksi);
    return $hasil;
}

function hapusMtKuliah($kode) {
    global $koneksi;
    $sql = "DELETE FROM matakuliah WHERE kode='$kode'";
    if (!mysqli_query($koneksi, $sql)) {
        die('Error: '.mysqli_error($koneksi));
    }
    $hasil = mysqli_affected_rows($koneksi);
    mysqli_close($koneksi);
    return $hasil;
}
function cariMtKuliah($kode) {
    global $koneksi;
    $sql = "SELECT * FROM matakuliah WHERE kode='$kode'";
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil) > 0) {
        return mysqli_fetch_assoc($hasil);
    }
    return null;
}

// [Nomor 3] Fungsi mengubah data matakuliah berdasarkan kode
function ubahMtKuliah($kode, $nama, $sks) {
    global $koneksi;
    $sql = "UPDATE matakuliah 
            SET nama='$nama', 
                sks='$sks' 
            WHERE kode='$kode'";
            
    if (mysqli_query($koneksi, $sql)) {
        return true;
    } else {
        die("Error mengubah record: " . mysqli_error($koneksi));
    }
}
?>