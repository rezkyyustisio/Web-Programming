<?php  
/*
    *Kode untuk mempelajari fungsi string explode
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Memecah string ke dalam array
*/

	$kalimat = "saya sedang belajar bahasa pemrograman web";
	$arrayBelajar = explode(" ", $kalimat);
	echo $arrayBelajar[5];
?>
<?php echo "<br><br>"; ?>
<?php 
	$tanggal = "03/03/2020";
	$tanggalArray = explode("/", $tanggal);
	echo $tanggalArray[2];
?>