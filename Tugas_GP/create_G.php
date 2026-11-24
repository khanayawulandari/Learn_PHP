<?php
require "guru.php";
$errors = [];

if(isset($_POST["proses"])){
    if(empty($_POST["nip"])){
        $errors[] = "NIP wajib diisi <br>";
    }
    if(empty($_POST["email"])){
        $errors[] = "Email wajib diisi <br>";
    }

if(empty($errors)){
    tambahGuru($_POST);
    header("Location: readguru.php");
    exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGuru</title>
</head>
<body>
    <h1>Tambah Guru</h1>
    <?php
        if(!empty($errors)){
            foreach($errors as $e){
                echo "<p style = 'color:red'>$e</p>";
            }
        }
    ?>

    <form action="" method="POST">
        <label for="nip">Nip :</label>
        <input type="text" name="nip" id="nip"><br><br>

        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" max="13"><br><br>

        <label for="jemis_kelamin">Jenis Kelamin : </label>
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-laki
        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> perempuan <br><br>

        <label for="mapel">Mapel :</label>
        <input type="text" name="mapel" id="mapel"><br><br>

        <label for="no_hp">No_hp :</label>
        <input type="text" name="no_hp" id="no_hp"><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="alamat">Alamat :</label>
        <input type="textarea" name="alamat" id="alamat"><br><br>

        <button type="submit" name="proses">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>