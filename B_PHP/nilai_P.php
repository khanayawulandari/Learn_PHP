<?php
    $errors = [];
if(isset($_POST["proses"])){
    if(empty($_POST["nama"])){
        $errors[] = "Nama wajib diisi <br>";
    }
    if(empty($_POST["kelas"])){
       $errors[] = "Kelas wajib diisi <br>";
    }
    if(empty($_POST["nilai_tugas"])){
       $errors[] = "Nilai tugas wajib diisi <br>";
    }
    if(empty($_POST["nilai_uts"])){
       $errors[] = "Nilai UTS wajib diisi <br>";
    }
    if(empty($_POST["nilai_uas"])){
       $errors[] =  "Nilai UAS wajib diisi <br>";
    }

    if(empty($errors)){
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $nilai_tugas = (float) $_POST["nilai_tugas"];
    $nilai_uts = (float) $_POST["nilai_uts"];
    $nilai_uas = (float) $_POST["nilai_uas"];

    $nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);

    echo $nama . " Anak kelas ". $kelas . "<br>" . "Nilai akhirnya: " . $nilai_akhir. "<br>";
$Grade;
    if($nilai_akhir >= 90){
        $Grade = 'A';
        echo "Grade A";
    }
    else if($nilai_akhir >= 80){
        $Grade = 'B';
        echo "Grade B";
    }
    else if($nilai_akhir >= 70){
        $Grade = 'C';
        echo "Grade C";
    }
    else if($nilai_akhir >= 60){
        $Grade = 'D';
        echo "Grade D";
    }
    else{
        $Grade = 'E';
        echo "Grade E";
    }

$Status;
    if($nilai_akhir >= 75){
        echo "<br> LULUS";
    }

    else{
        $Status = 'TIDAK LULUS';
        echo "<BR> TIDAK LULUS";
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Nilai</title>
</head>
<body>
    <?php
        if(!empty($errors)){
            foreach($errors as $e){
                echo "<p style = 'color:red'>$e</p>";
            }
        }
    ?>
    <form action="" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama"> <br><br>

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas"> <br><br>

    <label for="nilai_tugas">Nilai Tugas</label>
    <input type="text" name="nilai_tugas" id="nilai_tugas" min="0" max="100"> <br><br>

    <label for="nilai_uts">Nilai UTS</label>
    <input type="text" name="nilai_uts" id="nilai_uts" min="0" max="100"> <br><br>

    <label for="nilai_uas">Nilai UAS</label>
    <input type="text" name="nilai_uas" id="nilai_uas" min="0" max="100"> <br><br>
    <label for="nama">Nama</label>
    <input type="submit" name="proses">
    </form>
</body>
</html>