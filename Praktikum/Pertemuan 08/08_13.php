<?php 
/*
    *Kode untuk mempelajari parameter pada fungsi fopen
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Membaca dan menulis file dengan meletakkan kursornya di akhir file
    					  Paramter a+
*/

	$fp = fopen("catatan.txt", "a+");
	while(!feof($fp))
	{
		$barisKalimat = fgets($fp, 1024);
		echo $barisKalimat."<br>";
	}
	fwrite($fp, "\nPerulangan dengan for");
?>