<?php  
/*
    *Kode untuk mempelajari fungsi date
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Menampilkan jam, tanggal bulan tahun hari ke- dan tahun
*/

	date_default_timezone_set('Asia/Jakarta');
	echo date("d")."<br>";
	echo "Sekarang waktu menunjukan pukul ". date("H:i A"). "<br>". date("l, d F Y")."<br> Hari ke: ".date("z"). " dari tahun ". date("Y");
?>