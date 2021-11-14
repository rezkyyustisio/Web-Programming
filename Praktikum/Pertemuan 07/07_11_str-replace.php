<?php  
/*
    *Kode untuk mempelajari fungsi string str_replace
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Mengganti suatu kata dengan kata yang lain
*/

	$kalimat = "saya sedang bermain";
	$kalimatBaru = str_replace("bermain", "belajar", $kalimat);
	echo $kalimatBaru;
?>