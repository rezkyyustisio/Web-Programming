<?php  
if(isset($_GET['id'])){

	$id = $_GET['id'];

	$sql = "DELETE FROM konsumen WHERE id = '$id'";
	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php?menu=konsumen&status=sukses');
	} else {
		die("Gagal menghapus...");
	}
}
?>