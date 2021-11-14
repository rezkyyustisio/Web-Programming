<?php 
/*
    *Kode untuk mempelajari fungsi touch
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Membuat file
*/

	touch("filecontoh.txt");
	if(file_exists("filecontoh.txt"))
	{
		echo "File sudah ada";
	}
?>