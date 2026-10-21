<form action="" method="GET">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama"> <br><br>

    <label for="jurusan">Jurusan</label>
    <select name="jurusan" id="jurusan">
            <option value="RPL">Rekayasa Perangkat Lunak</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="TPM">Teknik Permesinan</option>
    </select> <br><br>
    <button type="submit">Kirim</button>
</form>

<?php
    if(isset($_GET['nama']) && isset($_GET["jurusan"])){
    $nama = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    echo  'nama:'. $nama;
    echo  '<br>Jurusan:'. $jurusan;
}
?>