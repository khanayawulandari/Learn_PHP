<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKelas</title>
</head>
<body>
    <h1>Tambah Kelas</h1>
    <form action="kelas.php?aksi=create" method="POST">
        <label for="nama_kelas">Nama Kelas :</label>
        <input type="text" name="nama_kelas" id="nama_kelas"><br><br>

        <label for="tingkat">Tingkat :</label>
        <input type="number" name="tingkat" id="tingkat" max="13"><br><br>

        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan"><br><br>

        <label for="wali_kelas">Wali Kelas :</label>
        <input type="text" name="wali_kelas" id="wali_kelas"><br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>