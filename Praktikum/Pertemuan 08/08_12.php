<?php  
/*
    *Kode untuk mempelajari parameter pada fungsi fopen
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Menulis file dengan meletakkan kursor di akhir file
    					  Paramter a
*/

	$fp = fopen("catatan.txt", 'a');
	fwrite($fp, "\nOperasi aritmatika");
?>