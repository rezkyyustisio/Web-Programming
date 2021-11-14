<?php
/*
    *Kode untuk mempelajari foreach
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Menampilkan elemen array dengan foreach
*/

$mahasiswa = array("Lindungs Siswanto", "Laki-laki", "11/06/1984", "A", 3.51, "Pemrograman Web");

foreach($mahasiswa as $dataMahasiswa){
	echo $dataMahasiswa."<br>";
}
?>