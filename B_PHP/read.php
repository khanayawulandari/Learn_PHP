<?php
require "koneksi.php";

$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);
?>

<a href="create.php"><button>Tambah Siswa</button></a> <br>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Nomor Handphone</th>
        <th>Aksi</th>
    </tr>
    <?php
while($siswa = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td><?= $siswa["id"] ?></td>
            <td><?= $siswa["nama"] ?></td>
            <td><?= $siswa["nis"] ?></td>
            <td><?= $siswa["kelas"] ?></td>
            <td><?= $siswa["no_hp"] ?></td>
            <td>
                <a href='update.php?id=<?=$siswa['id'] ?>'> <button>Edit</button></a>
                <a href='delete.php?id=<?=$siswa['id'] ?>' onclick="return confirm('Apakah ingin menghapus data?')"> <button>Delete</button></a>
            </td>
        </tr>
    <?php
}
?>
</table>