<?php  
/*
    *Kode untuk mempelajari fungsi string implode
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menggabungkan array menjadi satu string
*/

	$arrayBelajar = array("saya", "sedang", "mengikuti", "kuliah", "pemrograman", "web");
	$kalimatBelajar = implode(" ", $arrayBelajar);
	echo $kalimatBelajar;
?>
<?php echo "<br><br>"; ?>
<?php  
	$arrayTanggal = array(12, "Oktober", 2020);
	$tanggal = implode("-", $arrayTanggal);
	echo $tanggal;
?>