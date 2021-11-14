<?php  

/*
    *Kode untuk memplejari include dan require
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 05/10/2020
    * Dimodifikasi      : 05/10/2020
    * Perbaharuan       : Mengganti include dengan require
*/

if($cuaca == "cerah"){
	echo "Buat Es Teler 77";
} else {
	echo "Buat Mie Rebus Huh Hah";
}
require "require.file.php";

echo "<br><br>";
echo "Pada dasarnya perintah require() sama dengan perintah include(). Perbedaannya hanya terletak pada saat file disertakan tidak ditemukan, maka perintah-perintah selanjutnya tidak akan dijalankan.";

?>