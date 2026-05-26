<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa per Jurusan</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <form method="POST" action="">
        Pilih jurusan:<br>
        <input type="radio" name="jurusan" value="TI"> TI
        <input type="radio" name="jurusan" value="SI"> SI
        <input type="radio" name="jurusan" value="MI"> MI
        <input type="radio" name="jurusan" value="TK"> TK
        <input type="radio" name="jurusan" value="KA"> KA
        <br>
        <button type="submit" name="submit">OK</button>
        <button type="submit" name="semua">Tampilkan Semua</button>
    </form>

    <?php
    include 'crudmhs.php';
    $data = null;
    $judul = "";

    if (isset($_POST['semua'])) {
        $data = bacaSemuaMhs();
        $judul = "Semua Jurusan";
    }
    elseif (isset($_POST['submit']) && isset($_POST['jurusan'])) {
        $jur = $_POST['jurusan'];
        $data = bacaMhsPerJurusan($jur);
        $judul = "Jurusan $jur";
    }
        if ($data !== null) {
            echo "<h4>$judul</h4>";

        if (mysqli_num_rows($data) > 0) {
            echo "<table border='1' cellpadding='5' cellspacing='0'>
                    <tr bgcolor='#eeeeee'>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelamin</th>
                        <th>Jurusan</th>
                        <th>Proses</th>
                        <th>Hapus</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($data)) {
                $nim = $row['nim'];
                echo "<tr>
                        <td>{$row['nim']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['kelamin']}</td>
                        <td>{$row['jurusan']}</td>
                        <td>
                           <a href='konfirmasiubah.php?nim=$nim'>Ubah</a> 
                        </td>
                        <td>
                            <a href='konfirmasihapus.php?nim=$nim'>Hapus</a>
                        </td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada data untuk jurusan $jur.";
        }
        echo '<a href="tambahmhs.php">Tambah Data Mahasiswa</a>';
    }
    ?>
</body>
</html>