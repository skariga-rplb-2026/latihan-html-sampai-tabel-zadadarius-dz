<?php
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
} else {
    header("Location: hapusmhs.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus</title>
    <style>
        button, a.btn-batal {
            padding: 4px 12px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            color: black;
            background-color: #f0f0f0;
            border: 1px solid #ababab;
            border-radius: 2px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h2>Apakah anda akan menghapus mahasiswa dengan nim: <?php echo $nim; ?>?</h2>

    <form method="POST" action="proseshapus.php">
        <input type="hidden" name="nim" value="<?php echo $nim; ?>">
    
    <a href="teshapus.php?nim=<?php echo $nim; ?>">
        <button type="button">OK</button>
    </a>

    <a href="hapusmhs.php" class="btn-batal">Batal</a>
</body>
</html>