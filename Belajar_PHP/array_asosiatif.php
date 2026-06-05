<?php

echo "Biodata" . "<br/>";
$siswa = array("nama" => "Ji Seok", "usia" => 22, "kelas" => "XII", "jurusan" => "Teknik" );

echo "Nama: " . $siswa['nama'] . "<br/>";
echo "Usia: ". $siswa["usia"] . " tahun <br/>";
echo "Kelas: ". $siswa["kelas"] . "<br/>";
echo "Jurusan: ". $siswa["jurusan"] . "<br/>" . "<br/>";

echo "Buah". "<br/>";
$buah = array("Apel","Kesemek","Pisang","Anggur");

foreach ($buah as $item) {
    echo "Buah: ". $item ."<br/>";
}
?>