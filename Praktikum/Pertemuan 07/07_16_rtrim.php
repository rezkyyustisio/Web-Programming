<?php 
/*
    *Kode untuk mempelajari fungsi string rtrim
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menghapus karakter khusus dari ujung akhir/belakang, kanan suatu karakter.
*/

	$nama = 'Rezky Yustisio Hadi Pratama'; 
	$rtrimNama = rtrim($nama, 'Pratama'); 
	echo $rtrimNama; 
?>