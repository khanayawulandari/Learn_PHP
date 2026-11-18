<?php
require "koneksi.php";
function ambilSemuasiswa(){
    global $conn;

    $query = "SELECT * FROM kelas";
    $result = mysqli_query($conn, $query);

    $data = [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function ambilSiswaDanAbsensi($tanggal){
    global $conn;
    $query = "SELECT siswa.id, 
    siswa.nis,
    siswa.nama, 
    absensi.status,
    absensi.keterangan,
    absensi.waktu
    FROM siswa
    LEFT JOIN absensi
    ON absensi.siswa_id = siswa.id
    AND absensi.waktu = '$tanggal'
    ORDER BY siswa.nama
    ";
    $result = mysqli_query($conn,$query);
    $data = [];

    while($row = mysqli_fetch_assoc($result)){
     $data[]    = $row;
    }
    return $data;
}

function absensi ($id, $status, $keterangan){
    global $conn;

    $query = "SELECT * FROM siswa WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($result);

    if(!$result){
        return "Data Tidak Ditemukan";
    }
    $waktu = date("Y-m-d");
    $query = "SELECT * FROM absensi WHERE siswa_id='$id' AND waktu='$waktu';";
    $result = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($result);
if(!$result){
    $query = "INSERT INTO absensi (siswa_id, 
    waktu,
    status,
    keterangan)
    VALUES
    ('$id', '$waktu', '$status', '$keterangan');
    ";

    $result = mysqli_query($conn, $query);
    if(!$result){
        return "Gagal Melakukan Absensi";
    }
}else{
    $query = "UPDATE absensi SET
    status='$status',
    keterangan='$keterangan'
    WHERE siswa_id='$id' AND waktu='$waktu'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        return "Gagal Melakukan Absensi";
    }
}
    
    return "Absensi Berhasil";
}
if(isset($_GET['aksi']))
    if($_GET['aksi'] == 'absensi'){
        $id = $_GET['id'];
        $status = $_GET['status'];
        $keterangan = $_GET['keterangan'];
        $absensi = absensi($id, $status,$keterangan);
        header('Location:readabsensi.php?pesan=' . $absensi);
    }
?>
