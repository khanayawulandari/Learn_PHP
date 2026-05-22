<?php
//Tugas 1
//Lengkapi script berikut ini untuk menampilkan hasil bagi bilangan
//100 dengan 3 beserta sisanya

$bilangan = 100;
$pembagi = 3;

$hasilbagi = $bilangan / $pembagi;
$sisabagi = $bilangan % $pembagi;

echo $bilangan . " dibagi dengan " . $pembagi . " adalah " . $hasilbagi . " , sisa " . $sisabagi . "<br/>";



//Tugas 2
//Ada seorang nasabah yang menabung di bank x dengan saldo awal Rp. 1.000.000,-. 
//bank x menerapkan kebijakan bunga 3% perbulan saldo awal tabungan. Hitunglah jumlah saldo akhir
//nasabah tersebut setelah 11 bulan. Lengkapilah script berikut ini!

$saldoawal = 1000000;
$bunga = 0.03;
$bulan = 11;
$saldoakhir = $saldoawal - $saldoawal * $bunga * $bulan;

echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoakhir . ",-";


?>