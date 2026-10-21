<?php
require "koneksi.php";

$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);
?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Nomor Handphone</th>
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
    </tr>
    <?php
}
?>
</table>