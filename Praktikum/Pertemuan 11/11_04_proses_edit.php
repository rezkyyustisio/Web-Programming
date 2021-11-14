<?php 

include("10_01_koneksi.php");
date_default_timezone_set('Asia/Jakarta');

if(isset($_POST['ubahSepeda'])){

	$id = $_POST['id'];
	$noSeri = $_POST['noSeri'];
	$merkSepeda = $_POST['merkSepeda'];
	$jenisSepeda = $_POST['jenisSepeda'];
	$hargaSepeda = $_POST['hargaSepeda'];
	$ukuranSepeda = $_POST['ukuranSepeda'];
	$ketersediaanSepeda = $_POST['ketersediaanSepeda']." ".date("H:i:s");

	$sql = "UPDATE sepeda SET nomor_seri_sepeda = '$noSeri', merk_sepeda = '$merkSepeda', jenis_sepeda = '$jenisSepeda', harga_sepeda = '$hargaSepeda', ukuran_sepeda = '$ukuranSepeda', ketersedian_sepeda = '$ketersediaanSepeda' WHERE id = '$id'";
	$query = mysqli_query($db, $sql);

	if($query) {
		header('Location: 10_03_list_sepeda.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}

} else {
	die("Akses dilarang...");
}
?>