<?php  
/*
    *Kode untuk mempelajari parameter pada fungsi fopen
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Membuka file saja dan meletakkan kursor di awal file
    					  Parameter r
*/

	$fp = fopen("catatan.txt", 'r');
	echo fgets($fp, 1024);
	echo "<br><br>";
	fwrite($fp, "reset")
?>