<?php 
/*
    *Kode untuk mempelajari fungsi string parsestr
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Mengubah string menjadi variabel
*/

	$string = "nim=3201816021&nama=Rezky Yustisio Hadi Pratama";
	parse_str($string, $hasil);
	echo $hasil["nim"]."<br>";
	echo $hasil["nama"];
?>