<?php  

include("10_01_koneksi.php");
if(isset($_GET['id'])){

	$id = $_GET['id'];

	$sql = "DELETE FROM sepeda WHERE id = '$id'";
	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: 10_03_list_sepeda.php');
	} else {
		die("Gagal menghapus...");
	}

} else {
	die("akses dilarang...");
}
?>