<?php  
/*
    *Kode untuk mempelajari fungsi string trim
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menghilangkan spasi, dikiri atau dikanan
*/

	$password = " ini adalah password";
	$passwordAsli = trim($password);
	echo $passwordAsli;
?>

<?php echo "<br><br>"; ?>

<?php  
/*
    *Kode untuk mempelajari fungsi string rtrim
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menghapus karakter khusus dari ujung akhir/belakang, kanan suatu karakter.
*/

	$password = " ini adalah password";
	$passwordAsli = rtrim($password);
	echo $passwordAsli;
?>

<?php echo "<br><br>"; ?>

<?php  
/*
    *Kode untuk mempelajari fungsi string ltrim
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menghapus karakter khusus dari ujung awal/depan, kiri suatu karakter.
*/

	$password = " ini adalah password";
	$passwordAsli = ltrim($password);
	echo $passwordAsli;
?>