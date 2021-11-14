<?php  
if(isset($_GET['id'])){

	$id = $_GET['id'];

	$sql = "DELETE FROM sepeda WHERE id = '$id'";
	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php?menu=sepeda&status=sukses');
	} else {
		die("Gagal menghapus...");
	}
}
?>