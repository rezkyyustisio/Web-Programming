<?php 
/*
    *Kode untuk memplejari include dan require
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 05/10/2020
    * Dimodifikasi      : 05/10/2020
    * Perbaharuan       : Pindahkan baris ke-2 ke baris 12 fungsi include
*/

if($cuaca == "cerah"){
	echo "Buat Es Teler 77";
} else {
	echo "Buat Mie Rebus Huh Hah";
}
include "require.file.php";

echo "<br><br>";
echo "hasilnya adalah variabel cuaca tidak terdefinisi karena <br>";
echo "pemanggilan file require.file.php dilakukan di baris paling bawah <br>";
echo "sehingga tidak dapat terbaca yang mana program membaca kode dari atas ke bawah";
echo "<br><br>";
?>