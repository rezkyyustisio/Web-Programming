<?php 
/*
    *Kode untuk mempelajari fungsi string ltrim
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menghapus karakter khusus dari ujung awal/depan, kiri suatu karakter.
*/

	$nama = 'Rezky Yustisio Hadi Pratama'; 
	$ltrimNama = ltrim($nama, 'Rezky'); 
	echo $ltrimNama; 
?>