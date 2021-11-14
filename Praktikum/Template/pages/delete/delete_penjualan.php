<?php  
if(isset($_GET['id'])){

	$id = $_GET['id'];

	$sql = "DELETE FROM penjualan WHERE id = '$id'";
	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php?menu=penjualan&status=sukses');
	} else {
		die("Gagal menghapus...");
	}
}
?>