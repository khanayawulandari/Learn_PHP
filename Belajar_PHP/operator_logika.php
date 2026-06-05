<?php
//operator logika or, and, not
//yaitu dan, atau, bukan

$benar = true;
$salah = false;

$hasildan = $benar && $salah; //hasilnya 0 false
$hasilatau = $benar || $salah; //hasilnya 1 true
$hasilbukan = !$benar; //hasilnya 0 false

echo "hasil OL and: " . $hasildan . "<br/>";
echo "hasil OL or: " . $hasilatau . "<br/>";
echo "hasil OL not: " . $hasilbukan . "<br/>";
?>