<?php
$data = [
    ["nama" => "Siti", "kursus" => "HTML", "bayar" => "300000"],
    ["nama" => "Agus", "kursus" => "PHP", "bayar" => "500000"],
    ["nama" => "Joko", "kursus" => "MySQL", "bayar" => "400000"],
    ["nama" => "Dinda", "kursus" => "HTML", "bayar" => "300000"],
    ["nama" => "Nur", "kursus" => "PHP", "bayar" => "500000"],
    ["nama" => "Piko", "kursus" => "MySQL", "bayar" => "400000"]
];

//echo json_encode($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
</head>
<body>
    Pilih Kursus :
    <form action="" method ="GET">
        <?php
        if(isset($_GET['kursus'])){
            $filter = $_GET['kursus'];
        } else {
            $filter = "semua";
        }

    ?>
    <select name="kursus" id="" onchange="this.form.submit()">
        <option value="" <?php echo ($filter=="semua" || $filter=="")? "selected" : ""; ?>>ALL</option>
        <option value="HTML" <?php echo ($filter=="HTML")? "selected" : ""; ?> >HTML</option>
        <option value="PHP" <?php echo ($filter=="PHP")? "selected" : ""; ?> >PHP</option>
        <option value="MySQL" <?php echo ($filter=="MySQL")? "selected" : ""; ?> >MySQL</option>

</select>
</form>
<br>
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Kursus</th>
            <th>Bayar</th>
</tr>
<?php        
        $dataTampil =[];
        if(isset($_GET['kursus'])){
            $filter = $_GET['kursus'];
                if($filter == ""){
                    $dataTampil = $data;
                }else {
                    foreach($data as $d){
                        if($d["kursus"] == $filter){
                            $dataTampil[] = $d;
                        }
                    }
                }
            } else {
                $dataTampil= $data;
            }
                 foreach($dataTampil as $d){
            echo "<tr>";
            echo "<td>".$d['nama']."</td>";
            echo "<td>".$d['kursus']."</td>";
            echo "<td>".$d['bayar']."</td>";
            echo "</tr>";
            }
            ?>
</table>
</body>
</html>