<?php  
/*
    *Kode untuk mempelajari parameter pada fungsi fopen
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Membaca dan menulis file dengan meletakkan kursor di awal file
    					  Paramter w+
*/

	$fp = fopen("catatan.txt", "w+");
	fgets($fp, 1024);
	fwrite($fp, "reset");
?>