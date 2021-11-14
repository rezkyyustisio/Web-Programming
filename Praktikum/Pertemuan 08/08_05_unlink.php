<?php  
/*
    *Kode untuk mempelajari fungsi unlink
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Guna untuk menghapus file yang ada
*/

	touch("filecontoh.txt");
	if(file_exists("filecontoh.txt"))
	{
		echo "Filenya ada! <br>";
	}

	// menghapus file
	unlink("filecontoh.txt");

	// mengecek kembali keberadaan filenya
	if(file_exists("filecontoh.txt"))
	{
		echo "File sudah ada";
	}
	else
	{
		echo "File sudah tidak ada";
	}
?>