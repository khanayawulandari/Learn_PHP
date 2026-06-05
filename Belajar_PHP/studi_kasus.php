<?php
//studi kasus 1
$umur = 26;

if ($umur >= 18){
    echo"Kamu sudah dewasa" . "<br/>";
} else {
    echo "Kamu masih anak-anak" . "<br/>";
}

//studi kasus 2
$panjang = 22;
$lebar = 0.4;
$luas = $panjang * $lebar;
echo "Luas persegi panjang adalah: " . $luas ."<br/>" . "<br/>";

//Latihan
//buatkan code yang menghitung Luas Segitiga, dengan nilai alas = 11 dan tinggi = 7
//buatkan code program login, dengan username = admin1 dan password = xYe3ki8vP2
//dengan ketentuan jika keduanya benar maka login berhasil

echo "Latihan:" ."<br/>";
$alas = 11;
$tinggi = 7;
$luas = 1/2 * $tinggi * $alas;
echo "Luas segitiga adalah: " . $luas ."<br/>";

$username = "admin1";
$password = "xYe3ki8vP2";

if ($username && "admin1" . $password && "xYe3ki8vP2"){
    echo "Login berhasil!";
} else {
    echo "Login gagal, silahkan coba lagi";
}
     
?>