<?php  
require 'sidebar.php';

$id = $_GET['id'];

$sql = "SELECT * FROM konsumen WHERE id = '$id'";
$query = mysqli_query($db, $sql);
$list = mysqli_fetch_assoc($query);
?>

<section class="content-konsumen">
	<form method="POST" action="?menu=<?php echo $_GET['menu']; ?>&id=<?php echo $id; ?>" style="float: left; width: 800px;">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $list['id'] ?>">
			<p>
				<label for="kode-konsumen">Kode Konsumen: </label>
				<input type="text" name="kodeKonsumen" id="kode-konsumen" placeholder="Kode Konsumen" value="<?php echo $list['kode_konsumen'] ?>">
			</p>
		<br>
			<p>
				<label for="nama-konsumen">Nama Konsumen: </label>
				<input type="text" name="namaKonsumen" id="nama-konsumen" placeholder="Nama Konsumen" required value="<?php echo $list['nama_konsumen'] ?>">
			</p>
		<br>
			<p>
				<label for="provinsi">Provinsi: </label>
				<input type="text" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo $list['provinsi'] ?>">
			</p>
		<br>
			<p>
				<label for="alamat">Alamat: </label>
				<input type="text" name="alamat" id="alamat" placeholder="Alamat Konsumen" value="<?php echo $list['alamat'] ?>">
			</p>
		<br>
			<p>
				<input type="submit" value="Ubah" name="ubahKonsumen">
			</p>
		</fieldset>
	</form>
</section>

<?php 
if(isset($_POST['ubahKonsumen'])){

	$id = $_POST['id'];
	$kodeKonsumen = $_POST['kodeKonsumen'];
	$namaKonsumen = $_POST['namaKonsumen'];
	$provinsi = $_POST['provinsi'];
	$alamat = $_POST['alamat'];

	$sql = "UPDATE konsumen SET kode_konsumen = '$kodeKonsumen', nama_konsumen = '$namaKonsumen', provinsi = '$provinsi', alamat = '$alamat' WHERE id = '$id'";

	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php?menu=konsumen&status=sukses');
	} else {
		header('Location: index.php?menu=konsumen&status=gagal');
	}
}
?>