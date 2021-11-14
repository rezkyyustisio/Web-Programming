<?php  
/*
    *Kode untuk mempelajari array pisah
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Menampilkan isi array dengan menggunakan function list() untuk mengoper elemen array ke dalam bentuk variabel
*/

$mahasiswa = array("Lindungs Siswanto", "Laki-laki", "11/06/1984", "A", 3.51, "Pemrograman Web");

list($nama, $jenisKelamin, $tanggalLahir, $poin, $IP, $spesialisasi) = $mahasiswa;

echo $nama."<br>";
echo $jenisKelamin."<br>";
echo $tanggalLahir."<br>";
echo $poin."<br>";
echo $IP."<br>";
echo $spesialisasi."<br>";
?>