<?php
require "kelas.php";
$data = ambilSemuaKelas();
?>

<h1>Daftar Kelas</h1>
<a href="create_kls.php"><button>Tambah Kelas</button></a> <br>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama Kelas</th>
        <th>Tingkat</th>
        <th>Jurusan</th>
        <th>Wali Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data as $kelas){
    ?>
        <tr>
            <td><?= $kelas["id"] ?></td>
            <td><?= $kelas["nama_kelas"] ?></td>
            <td><?= $kelas["tingkat"] ?></td>
            <td><?= $kelas["jurusan"] ?></td>
            <td><?= $kelas["wali_kelas"] ?></td>
            <td>
                <a href='updatekelas.php?id=<?=$kelas['id'] ?>'> 
                    <button>Edit</button></a>
                <a href='kelas.php?id=<?=$kelas['id'] ?>&aksi=delete' onclick="return confirm('Apakah ingin menghapus data?')">
                     <button>Delete</button></a>
            </td>
        </tr>
    <?php
        }
?>
</table>