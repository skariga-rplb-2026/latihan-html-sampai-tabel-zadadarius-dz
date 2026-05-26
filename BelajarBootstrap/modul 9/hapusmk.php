<?php
include('crudmk.php');
$sql = "SELECT * FROM matakuliah";
$data = bacaMtKuliah($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hapus Matakuliah</title>
</head>
<body>
    <h2>Hapus Data Matakuliah</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr bgcolor="#eeeeee">
            <th>Kode MK</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Proses</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>{$row['kode']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['sks']}</td>
                    <td><a href='konfirmasihapusmk.php?kode={$row['kode']}'>Hapus</a></td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>