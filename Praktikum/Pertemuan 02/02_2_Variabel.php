<?php 
	echo 'Penulisan variabel yang benar seperti di bawah ini <br>';
	$nama = "Student";
	echo 'Halo $nama<br>';
	echo "Halo $nama<br><br>";

	echo 'Penulisan variabel yang salah seperti di bawah ini <br>';
	echo 'Halo $1nama <br>';
	echo 'Halo $-nama <br>';
	echo 'Disebabkan karena penamaan nama variabel tidak boleh dimulai dengan angka, ataupun tanda aritmatika <br><br>';

	echo 'Kecuali underscore bisa <br> Halo $_nama dengan catatan versi php yang saya gunakan adalah v.7.4.7 selain itu saya kurang tahu apakah bisa menggunakan underscore atau tidak<br>';
	$_nama = "Student";
	echo "Halo $_nama<br>";
?>