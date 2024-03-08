<?php
$angka1 = 10; // mendeklarasikan variabel $angka1 dan memberinya nilai 10
$angka2 = 5; //  operasi pemberian nilai 
$hasil = $angka1 + $angka2; // hasil penjumlahan
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>"; // mencetak hasil penjumlahan menggunakan interpolasi string.

$benar = true; // deklarasi dg nilai boolean true
$salah = false; // deklarasi dg nilai boolean true
echo "Variabel benar: $benar, Variabel salah: $salah. <br>"; // mencetak nilai variabel $benar dan $salah menggunakan interpolasi string.

//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS","WebsiteKu.com<br>");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";

?>