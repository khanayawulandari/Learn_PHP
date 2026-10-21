<form action="" method="POST">
    <label for="nama">Nama</label>
    <br>
    <input type="text" name="nama" id="nama">
    <br>

    <label for="kelas">Kelas</label>
    <br>
    <select name="kelas" id="kelas">
        <option value="XI RPL">XI RPL</option>
        <option value="XI DKV">XI DKV</option>
        <option value="XI TPM 1">XI TPM 1</option>
        <option value="XI TPM 2">XI TPM 2</option>
        <option value="XI TITL 1">XI TITL 1</option>
        <option value="XI TITL 2">XI TITL 2</option>
    </select>
    <br>

    <label for="jurusan">Jurusan</label>
    <br>
    <input type="text" name="jurusan" id="jurusan">
    <br>

    <label for="kelamin">Jenis Kelamin</label>
    <br>
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki laki">Laki Laki
    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">Perempuan
    <br>
    <label for="umur">Umur</label>
    <br>
    <input type="number" name="umur" id="umur">
    <br>
    <label for="alamat">Alamat</label>
    <br>
    <textarea name="alamat" id="alamat" rows="5" cols="30"></textarea>
    <br>
    <button type="submit">Kirim</button>

</form>   

<?php 
    if(isset($_POST["nama"]) && isset($_POST["kelas"]) && isset($_POST["jurusan"]) && isset($_POST["jenis_kelamin"]) &&  isset($_POST["umur"]) && isset($_POST["alamat"])){
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $umur = $_POST["umur"];
    $alamat = $_POST["alamat"];
    echo "Nama : ".$nama;
    echo "<br> Kelas : ".$kelas;
    echo "<br> Jurusan : ".$jurusan;
    echo "<br> Jenis Kelamin : ".$jenis_kelamin;
    echo "<br> Umur : ".$umur;
    echo "<br> Alamat : ".$alamat;

} 
?>