<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database   = "Kevin_Akademik"; 

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function bacaSemuaMhs() {
    global $koneksi;
    $sql = "SELECT * FROM mahasiswa";
    return mysqli_query($koneksi, $sql);
}

function bacaMhsPerJurusan($jurusan) {
    global $koneksi;
    $sql = "SELECT * FROM mahasiswa WHERE jurusan = '$jurusan'";
    return mysqli_query($koneksi, $sql);
}

function cariMhsDariNim($nim) {
    global $koneksi;
    $sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $hasil = mysqli_query($koneksi, $sql);
    return mysqli_fetch_assoc($hasil);
}

function tambahMhs($nim,$nama,$kelamin,$jurusan) {
    global $koneksi;
    $sql = "INSERT INTO mahasiswa values ('$nim', '$nama', '$kelamin', '$jurusan')";
    $hasil = 0;
    if (mysqli_query($koneksi, $sql)) {
        $hasil = 1;
    }
    mysqli_close($koneksi);
    return $hasil;
    
}
function hapusMhs($nim) {
    global $koneksi;
    $sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
    if (!mysqli_query($koneksi, $sql)) {
        die('Error: '.mysqli_error($koneksi));
    }
    $hasil = mysqli_affected_rows($koneksi);
    mysqli_close($koneksi);
    return $hasil;
}
function cariMhs($nim) {
    global $koneksi;
    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil) > 0) {
        $baris = mysqli_fetch_assoc($hasil);
        $data['nim'] = $baris['nim'];
        $data['nama'] = $baris['nama'];
        $data['kelamin'] = $baris['kelamin'];
        $data['jurusan'] = $baris['jurusan'];
        mysqli_close($koneksi);
        return $data;
    }else{
        mysqli_close($koneksi);
        return null;
    }
}
function cariSemuaMhs($kondisi) {
    global $koneksi;
    $sql = "SELECT * FROM mahasiswa WHERE $kondisi";
    return mysqli_query($koneksi, $sql);
}
function ubahMhs($nim, $nama, $kelamin, $jurusan) {
    global $koneksi;
    $sql = "UPDATE mahasiswa
            SET nama='$nama', 
            kelamin='$kelamin',
            jurusan='$jurusan'
            WHERE nim='$nim'";
    if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
    }else{
        die ("Error mengubah record: " . mysqli_error($koneksi));
    }
    mysqli_close($koneksi);
    return $hasil;
}

?>