<?php 

include("10_01_koneksi.php");
date_default_timezone_set('Asia/Jakarta');

if(isset($_POST['tambahSepeda'])){

	$noSeri = $_POST['noSeri'];
	$merkSepeda = $_POST['merkSepeda'];
	$jenisSepeda = $_POST['jenisSepeda'];
	$hargaSepeda = $_POST['hargaSepeda'];
	$ukuranSepeda = $_POST['ukuranSepeda'];
	$ketersediaanSepeda = $_POST['ketersediaanSepeda']." ".date("H:i:s");

	$sql = "INSERT INTO sepeda (nomor_seri_sepeda, merk_sepeda, jenis_sepeda, harga_sepeda, ukuran_sepeda, ketersedian_sepeda) VALUE ('$noSeri', '$merkSepeda', '$jenisSepeda', '$hargaSepeda', '$ukuranSepeda', '$ketersediaanSepeda')";

	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: 10_03_list_sepeda.php?status=sukses');
	} else {
		header('Location: 10_03_list_sepeda.php?status=sukses');
	}
} else {
	die("Akses dilarang...");
}
?>