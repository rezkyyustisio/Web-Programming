<?php  
/*
    *Kode untuk mempelajari tipe data pada array
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Menampilkan isi array dengan menggunakan for
*/

$mahasiswa = array("Lindungs Siswanto", "Laki-laki", "11/06/1984", "A", 3.51, "Pemrograman Web");

for($x = 0; $x<=5; $x++){
	echo $mahasiswa[$x]."<br>";
}
?>