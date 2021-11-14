<?php  
/*
    *Kode untuk mempelajari fungsi string strpos
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Mencari posisi suatu karakter
*/

	$kalimat = "Saya sedang belajar web";
	$kataYangDicari = "web";
	$posisi = strpos($kalimat, $kataYangDicari);
	echo $posisi;
?>