<?php
require "guru.php";
$data = ambilSemuaGuru();
?>

<h1>Daftar Guru</h1>
<a href="create_G.php"><button>Tambah Guru</button></a> <br>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nip</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Mapel</th>
        <th>No.hp</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>
    <?php
        foreach($data as $guru){
    ?>
        <tr>
            <td><?= $guru["id"] ?></td>
            <td><?= $guru["nip"] ?></td>
            <td><?= $guru["nama"] ?></td>
            <td><?= $guru["jenis_kelamin"] ?></td>
            <td><?= $guru["mapel"] ?></td>
            <td><?= $guru["no_hp"] ?></td>
            <td><?= $guru["email"] ?></td>
            <td><?= $guru["alamat"] ?></td>
            <td>
                <a href='updateguru.php?id=<?=$guru['id'] ?>'> 
                    <button>Edit</button></a>
                <a href='guru.php?id=<?=$guru['id'] ?>&aksi=delete' onclick="return confirm('Apakah ingin menghapus data?')">
                     <button>Delete</button></a>
            </td>
        </tr>
    <?php
        }
?>
</table>