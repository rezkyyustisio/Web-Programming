<?php  
/*
    *Kode untuk mempelajari fungsi fopen
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Membuka file
*/

	$file = "tes.txt";
	$fileOpen = fopen($file, 'r') or die ("File tidak bisa dibaca");

	while(!feof($fileOpen))
	{
		$barisKalimat = fgets($fileOpen, 1024);
		echo $barisKalimat."<br>";
	}
?>