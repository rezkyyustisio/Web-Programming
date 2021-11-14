<?php 
/*
    *Kode untuk mempelajari fungsi string strcmp
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Membandingkan string antar string
*/

	$passwordAsli = "pemrogramanweb";
	$passwordInput = "pemrogramanweb";

	$cocok = strcmp($passwordAsli, $passwordInput);
	if($cocok == 0){
		echo "Password anda benar!";
	} else {
		echo "Password anda salah.";
	}
?>
<?php echo "<br><br>"; ?>
<?php 
/*
    *Kode untuk mempelajari fungsi string strcmp
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Mengganti nilai variabel passwordInput
*/

	$passwordAsli = "pemrogramanweb";
	$passwordInput = "pemrogramanw3b";

	$cocok = strcmp($passwordAsli, $passwordInput);
	if($cocok == 0){
		echo "Password anda benar!";
	} else {
		echo "Password anda salah.";
	}
?>	