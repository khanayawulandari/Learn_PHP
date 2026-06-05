<?php

$nilai1 = 17;
$nilai2 = 3;

$samaDengan = $nilai1 == $nilai2;
$tidakSamaDengan = $nilai1 != $nilai2;
$kurangDari = $nilai1 < $nilai2;
$lebihDari = $nilai1 > $nilai2;
$kurangDariAtauSamaDengan = $nilai1 <= $nilai2;
$lebihDariAtauSamaDengan = $nilai1 >= $nilai2;

echo "Sama dengan: " . $samaDengan . "<br/>";
echo "Tidak sama dengan: " . $tidakSamaDengan . "<br/>";
echo "Kurang dari: " . $kurangDari . "<br/>";
echo "Lebih dari: " . $lebihDari . "<br/>";
echo "Kurang dari atau sama dengan: " . $kurangDariAtauSamaDengan . "<br/>";
echo "Lebih dari atau sama dengan: " . $lebihDariAtauSamaDengan . "<br/>";
?>