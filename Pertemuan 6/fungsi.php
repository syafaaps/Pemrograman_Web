<?php
/*
//nomor 1
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Elok<br/>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan();


//membuat fungsi nomor 4
function perkenalan($nama, $salam) {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan($saya, $ucapanSalam) ;


// nomor 7
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama. " <br/>";
    echo "Senang berkenalan dengan Anda<br/>";
 }
   //memanggil fungsi yang sudah dibuat 
    perkenalan("Hamdana", "Hallo");

    echo "<hr>";

    $saya = "Syava";
    $ucapanSalam = "Selamat Pagi";

    //perkenalan($saya, $ucapanSalam);
    //memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);


//Nomor 10
 //membuat fungsi
 function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungUmur(2003, 2024) . "tahun"

*/

// Nomor 13
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama. " <br/>";
    
   //memanggil fungsi lain
   echo "Saya berusia ". hitungUmur(2003,2024) . " tahun<br/>";
   echo "Senang berkenalan dengan anda<br/>";
 }

 // memanggil fungsi perkenalan 
 perkenalan("Syava");
?>
