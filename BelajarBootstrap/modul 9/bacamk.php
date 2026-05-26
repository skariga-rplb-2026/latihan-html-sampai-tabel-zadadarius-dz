<?php
include('crudmk.php');

// Inisialisasi variabel awal
$data = null;
$status_pencarian = false;

// 1. Kondisi jika tombol "Cari" diklik
if (isset($_POST['cari']) && !empty($_POST['kode'])) {
    $kode = $_POST['kode'];
    
    // Kita buatkan query pencarian spesifik berdasarkan kode yang diinput
    $sql = "SELECT * FROM matakuliah WHERE kode = '$kode'";
    $data = bacaMtKuliah($sql);
    $status_pencarian = true;
} 
// 2. Kondisi jika tombol "Tampilkan Semua" diklik atau halaman pertama kali dibuka
else {
    $sql = "SELECT * FROM matakuliah";
    $data = bacaMtKuliah($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Matakuliah</title>
</head>
<body>

    <h2>Daftar Matakuliah</h2>

    <form method="POST" action="">
        Cari Kode MK: 
        <input type="text" name="kode" value="<?php echo isset($_POST['kode']) ? $_POST['kode'] : ''; ?>">
        <button type="submit" name="cari">Cari</button>
        <button type="submit" name="semua">Tampilkan Semua</button>
    </form>
    <br>

    <?php
    // Cek apakah query data berhasil ditarik dan isinya ada
    if ($data && mysqli_num_rows($data) > 0) {
    ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr bgcolor="#eeeeee">
                <th>Kode MK</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Proses</th>
                <th>Hapus</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($data)) {
                $kode = $row['kode']; 
                echo "<tr>
                        <td>{$row['kode']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['sks']}</td>
                        <td>
                            <a href='konfirmasiubahmk.php?kode=$kode'>Ubah</a>
                        </td>
                        <td>
                            <a href='konfirmasihapusmk.php?kode=$kode'>Hapus</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>
    <?php
    } else {
        // Jika statusnya sedang mencari tapi tidak ketemu di database
        if ($status_pencarian) {
            echo "<p style='color: red; font-weight: bold;'>Data tidak ditemukan</p>";
        } else {
            echo "<p>Belum ada data mata kuliah di dalam database.</p>";
        }
    }
    ?>

    <br>
    <a href="tambahmk.php">Tambah Data Matakuliah</a>

</body>
</html>