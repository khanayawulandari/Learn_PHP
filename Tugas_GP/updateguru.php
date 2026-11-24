<?php
require 'guru.php';
$id = $_GET['id'];

$guru = ambilSatuGuru($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGuru</title>
</head>
<body>
    <h1>Edit Guru</h1>
    <form action="guru.php?aksi=update" method="POST">
        <input type="number" name="id" id="id" value="<?=$guru['id']?>" style="display:none;">

        <label for="nip">NIP :</label>
        <input type="number" name="nip" id="nip" value="<?=$guru['nip']?>"><br><br>

        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="<?=$guru['nama']?>"><br><br>

        <?php
if($guru['jenis_kelamin'] == 'L'){
?>
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked> Laki-laki
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> perempuan
<?php
}else{
    ?>
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-laki
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked> perempuan 
    <?php
}
?><br><br>

        <label for="mapel">Mapel :</label>
        <input type="text" name="mapel" id="mapel" value="<?=$guru['mapel']?>"><br><br>

        <label for="no_hp">no_hp :</label>
        <input type="text" name="no_hp" id="no_hp" value="<?=$guru['no_hp']?>"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="<?=$guru['email']?>"><br><br>

        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" value="<?=$guru['alamat']?>"><br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>