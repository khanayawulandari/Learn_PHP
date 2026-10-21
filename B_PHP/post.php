<form action="" method="POST">
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
    if(isset($_POST['nama']) && isset($_POST["jurusan"])){
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    echo  'nama:'. $nama;
    echo  '<br>Jurusan:'. $jurusan;
}
?>