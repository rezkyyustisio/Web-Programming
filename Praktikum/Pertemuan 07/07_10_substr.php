<?php  
/*
    *Kode untuk mempelajari fungsi string substr
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menampilkan sebagian isi dari suatu string
*/

	$kalimat = "saya sedang mengetik menggunakan keyboard, mengikuti mata kuliah pemrograman web";
	$potongKalimat = substr($kalimat, -3);
	echo $potongKalimat;
?>

<?php echo "<br><br>"; ?>

<?php  
/*
    *Kode untuk mempelajari fungsi string substr
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Modifikasi nilai dari paramter fungsi substr
*/

	$kalimat = "saya sedang mengetik menggunakan keyboard, mengikuti mata kuliah pemrograman web";
	$potongKalimat = substr($kalimat, 0, 41);
	echo $potongKalimat;
?>