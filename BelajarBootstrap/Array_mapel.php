<?php
$data = [
    ["nama" => "Siti", "mapel" => "Matematika", "nilai" => "90", "grade" => "A"],
    ["nama" => "Agus", "mapel" => "Informatika", "nilai" => "75", "grade" => "C"],
    ["nama" => "Joko", "mapel" => "Bahasa Inggris", "nilai" => "85", "grade" => "B"],
    ["nama" => "Dinda", "mapel" => "Matematika", "nilai" => "70", "grade" => "C"],
    ["nama" => "Nur", "mapel" => "Informatika", "nilai" => "95", "grade" => "A"],
    ["nama" => "Piko", "mapel" => "Bahasa Inggris", "nilai" => "88", "grade" => "B"]
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
        if(isset($_GET['mapel'])){
            $filter = $_GET['mapel'];
        } else {
            $filter = "semua";
        }

    ?>
    <select name="mapel" id="" onchange="this.form.submit()">
        <option value="" <?php echo ($filter=="semua" || $filter=="")? "selected" : ""; ?>>ALL</option>
        <option value="Matematika" <?php echo ($filter=="Matematika")? "selected" : ""; ?> >Matematika</option>
        <option value="Informatika" <?php echo ($filter=="Informatika")? "selected" : ""; ?> >Informatika</option>
        <option value="Bahasa Inggris" <?php echo ($filter=="Bahasa Inggris")? "selected" : ""; ?> >Bahasa Inggris</option>

</select>
</form>
<br>
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Nilai</th>
            <th>Grade</th>
</tr>
<?php        
        $dataTampil =[];
        if(isset($_GET['mapel'])){
            $filter = $_GET['mapel'];
                if($filter == ""){
                    $dataTampil = $data;
                }else {
                    foreach($data as $d){
                        if($d["mapel"] == $filter){
                            $dataTampil[] = $d;
                        }
                    }
                }
            } else {
                $dataTampil= $data;
            }
            foreach($dataTampil as $d){
                $bgColor = "";
                $textColor = "";

                if ($d['grade'] == "A") {
                    $bgColor = "#69ff23";
                    $textColor = "black";
                } elseif ($d['grade'] == "B") {
                    $bgColor = "#dbf024";
                    $textColor = "black";
                } elseif ($d['grade'] == "C") {
                    $bgColor = "#ff1c1c";
                    $textColor = "black";
                }

            echo "<tr style='background-color: $bgColor; color: $textColor;'>";
            echo "<td>".$d['nama']."</td>";
            echo "<td>".$d['mapel']."</td>";
            echo "<td>".$d['nilai']."</td>";
            echo "<td>".$d['grade']."</td>";
            echo "</tr>";
            }
            ?>
            <tr>
                <th colspan="4" align="left"> Rata-rata :
                <?php
                $total=0;
                $nilai=0;
                foreach($data as $d) {
                    $total+=$d["nilai"];
                    $nilai++;
                }
                if ($nilai > 0) {
                    $mean = $total / $nilai;
                    echo number_format($mean, 2);
                } else {
                    echo "0";
                 }
         ?>
    </th>
</tr>
</table>
</body>
</html>