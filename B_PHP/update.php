<?php
require "koneksi.php";

$id;
$siswa;
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM siswa WHERE id = '$id'";
    $siswa = mysqli_query($conn, $query);
    $siswa = mysqli_fetch_assoc($siswa);
    if(!$siswa){
        die("Data Tidak Ditemukan");
    }
}else{
    die("Halaman Tidak Ditemukan");
}

if(isset($_POST["proses"])){
    $nis = $_POST ["nis"];
    $nama = $_POST ["nama"];
    $jenis_kelamin = $_POST ["jenis_kelamin"] ?? "";
    $alamat = $_POST ["alamat"];
    $kelas = $_POST ["kelas"];
    $no_hp = $_POST ["no_hp"];

    $query = "UPDATE siswa SET
    nis = '$nis',
    nama = '$nama',
    jenis_kelamin = '$jenis_kelamin',
    alamat = '$alamat',
    kelas = '$kelas',
    no_hp = '$no_hp' WHERE id = '$id'
    ;";

    $result= mysqli_query($conn, $query);
    if(!$result){
        echo "<h5 style='color:red;'>Gagal Mengedit Data" . mysqli_error($conn) ." </h5>";
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
    <title>Update</title>
</head>
<body>
    <h1>Update</h1>
    <form action="" method="post">
        <label for="nis">NIS :</label>
    <input type="number" name="nis" id="nis" value="<?= $siswa['nis'] ?>"> <br><br>

    <label for="nama">Nama :</label>
    <input type="text" name="nama" id="nama" value="<?= $siswa['nama'] ?>"> <br><br>

    <label for="jemis_kelamin">Jenis Kelamin : </label>
<?php
if($siswa['jenis_kelamin'] == 'L'){
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
?>
<br>
    <label for="alamat">Alamat :</label>
    <textarea name="alamat" id="alamat"><?= $siswa['alamat'] ?> </textarea> <br><br>

    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas" id="kelas" value="<?= $siswa['kelas'] ?>"> <br><br>

    <label for="no_hp">No. Handphone :</label>
    <input type="text" name="no_hp" id="no_hp" value="<?= $siswa['no_hp'] ?>"> <br><br>

    <input type="submit" name="proses" value="proses">
    <input type="reset">
    </form>
</body>
</html>