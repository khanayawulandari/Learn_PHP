<?php
require "absensi.php";
$tanggal = date("Y-m-d");
$data = ambilSiswaDanAbsensi($tanggal);
?>
<h1>
    Rekap Absensi
<h1>       

<table border="1">
    <tr>
        <th>Id siswa</th>
        <th>Nama Siswa</th>
        <th>Nis Siswa</th>
        <th>Status Absensi</th>
        <th>Keterangan Absensi</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data as $rekap){
    ?>
        <tr>
            <td><?= $rekap["id"] ?></td>
            <td><?= $rekap["nama"] ?></td>
            <td><?= $rekap["nis"] ?></td>
            <td><?= $rekap["status"] ?></td>
            <td><?= $rekap["keterangan"] ?></td>
            <td><?= $rekap["waktu"] ?></td>
            <td>
                <button onclick="masuk(<?= $rekap['id'] ?>)">Masuk</button>
                <button onclick="sakit(<?= $rekap['id'] ?>)">Sakit</button>
                <button onclick="izin(<?= $rekap['id'] ?>)">Izin</button>
                <button onclick="alpha(<?= $rekap['id'] ?>)">Alpha</button>
            </td>
        </tr>
    <?php
        }
?>
</table>

<script>
    function masuk(id){
    let keterangan = '';
    window.location.href = "absensi.php?aksi=absensi&status=masuk&id="+ id + "&keterangan="+keterangan
}

    function sakit(id){
    let keterangan = prompt("Masukkan keterangan")
    window.location.href = "absensi.php?aksi=absensi&status=sakit&id="+ id + "&keterangan="+keterangan
}

    function izin(id){
    let keterangan = prompt("Masukkan keterangan")
    window.location.href = "absensi.php?aksi=absensi&status=izin&id="+ id + "&keterangan="+keterangan
}

    function alpha(id){
    let keterangan = prompt("Masukkan keterangan")
    window.location.href = "absensi.php?aksi=absensi&status=alpha&id="+ id + "&keterangan="+keterangan
}
</script>