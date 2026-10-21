<?php
require "koneksi.php";


if(isset($_POST["proses"])){
    $nis = $_POST ["nis"];
    $nama = $_POST ["nama"];
    $jenis_kelamin = $_POST ["jenis_kelamin"] ?? "";
    $alamat = $_POST ["alamat"];
    $kelas = $_POST ["kelas"];
    $no_hp = $_POST ["no_hp"];

    $query = "INSERT INTO siswa (nis, nama, jenis_kelamin, alamat, kelas, no_hp) 
    VALUES('$nis', '$nama', '$jenis_kelamin', '$alamat', '$kelas', '$no_hp');";

    $result= mysqli_query($conn, $query);
    if(!$result){
        echo "<h5 color='red'>Gagal Menambah Data" . mysqli_error($conn) ." </h5>";
    }
    else{
        header('Location:read.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h1>Create</h1>
    <form action="" method="post">
        <label for="nis">NIS :</label>
    <input type="number" name="nis" id="nis"> <br><br>

    <label for="nama">Nama :</label>
    <input type="text" name="nama" id="nama"> <br><br>

    <label for="jemis_kelamin">Jenis Kelamin : </label>
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-laki
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> perempuan <br><br>

    <label for="alamat">Alamat :</label>
    <input type="text" name="alamat" id="alamat"> <br><br>

    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas" id="kelas"> <br><br>

    <label for="no_hp">No. Handphone :</label>
    <input type="text" name="no_hp" id="no_hp"> <br><br>

    <input type="submit" name="proses" value="proses">
    <input type="reset">
    </form>
</body>
</html>