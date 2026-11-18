<?php
require 'kelas.php';
$id = $_GET['id'];

$kelas = ambilSatuKelas($id);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKelas</title>
</head>
<body>
    <h1>Edit Kelas</h1>
    <form action="kelas.php?aksi=update" method="POST">
        <input type="number" name="id" id="id" value="<?=$kelas['id']?>" style="display:none;">
        <label for="nama_kelas">Nama Kelas :</label>
        <input type="text" name="nama_kelas" id="nama_kelas" value="<?=$kelas['nama_kelas']?>">

        <label for="tingkat">Tingkat :</label>
        <input type="number" name="tingkat" id="tingkat" max= "12" value="<?=$kelas['tingkat']?>">

        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" value="<?=$kelas['jurusan']?>">

        <label for="wali_kelas">Wali Kelas :</label>
        <input type="text" name="wali_kelas" id="wali_kelas" value="<?=$kelas['wali_kelas']?>">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>