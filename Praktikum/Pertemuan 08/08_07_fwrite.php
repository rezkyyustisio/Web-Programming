<?php  
/*
    *Kode untuk mempelajari fungsi fwrite
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Menulis atau menambahkan isi file
*/

	$file = fopen("tes.txt", "w");
	echo fwrite($file, "Hallo, Selamat datang di pemrograman web!");
	fwrite($file, '123');
	fclose($file);
?>