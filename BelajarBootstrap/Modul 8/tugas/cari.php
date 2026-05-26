<!DOCTYPE html>
<html>
<head>
    <title>Cari Mahasiswa</title>
</head>
<body>
    <form method="POST" action="">
        NIM: <input type="text" name="nim" required>
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php
    if (isset($_POST['cari'])) {
        include 'crudmhs.php';
        $nim = $_POST['nim'];
        $mhs = cariMhsDariNim($nim);

        if ($mhs) {
            echo "<table border='1' cellpadding='5' cellspacing='0' style='margin-top:15px;'>
                    <tr>
                        <td bgcolor='#eeeeee'>NIM</td>
                        <td>{$mhs['nim']}</td>
                    </tr>
                    <tr>
                        <td bgcolor='#eeeeee'>Nama</td>
                        <td>{$mhs['nama']}</td>
                    </tr>
                    <tr>
                        <td bgcolor='#eeeeee'>Kelamin</td>
                        <td>" . ($mhs['kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan') . "</td>
                    </tr>
                    <tr>
                        <td bgcolor='#eeeeee'>Jurusan</td>
                        <td>{$mhs['jurusan']}</td>
                    </tr>
                  </table>";
        } else {
            echo "<p>NIM $nim tidak ada.</p>";
        }
    }
    ?>
</body>
</html>