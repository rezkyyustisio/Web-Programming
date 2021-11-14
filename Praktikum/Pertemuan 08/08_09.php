<?php  
/*
    *Kode untuk mempelajari parameter pada fungsi fopen
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Membaca file kemudian menulis file tersebut dengan meletakkan kursor pada awal 						  file paramter r+
*/

	$fp = fopen("catatan.txt", "r+");
	while (!feof($fp)) {
		$barisKalimat = fgets($fp, 1024);
		echo $barisKalimat."<br>";
	}
	fwrite($fp, "\nBelajar GET dan POST");
?>