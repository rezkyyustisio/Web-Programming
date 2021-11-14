<?php  
/*
    *Kode untuk mempelajari fungsi is_file
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Mengecek file atau bukan
*/

if(file_exists("latihan.txt"))
{
	echo "File-nya ada lho...";
}
else 
{
	echo "File-nya tidak ada guys...";
}

if(is_file("latihan.txt"))
{
	echo "Ini adalah file!";
}
?>