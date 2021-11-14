<?php  
require 'sidebar.php';
?>

<section class="content-konsumen">
	<form method="POST" action="?menu=<?php echo $_GET['menu']; ?>" style="float: left; width: 800px;">
		<fieldset>
			<p>
				<label for="kode-konsumen">Kode Konsumen: </label>
				<input type="text" name="kodeKonsumen" id="kode-konsumen" placeholder="Kode Konsumen">
			</p>
		<br>
			<p>
				<label for="nama-konsumen">Nama Konsumen: </label>
				<input type="text" name="namaKonsumen" id="nama-konsumen" placeholder="Nama Konsumen" required>
			</p>
		<br>
			<p>
				<label for="provinsi">Provinsi: </label>
				<input type="text" name="provinsi" id="provinsi" placeholder="Provinsi">
			</p>
		<br>
			<p>
				<label for="alamat">Alamat: </label>
				<input type="text" name="alamat" id="alamat" placeholder="Alamat Konsumen">
			</p>
		<br>
			<p>
				<input type="submit" value="Tambah" name="tambahKonsumen">
			</p>
		</fieldset>
	</form>
</section>

<?php 
if(isset($_POST['tambahKonsumen'])){

	$kodeKonsumen = $_POST['kodeKonsumen'];
	$namaKonsumen = $_POST['namaKonsumen'];
	$provinsi = $_POST['provinsi'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO konsumen (kode_konsumen, nama_konsumen, provinsi, alamat) VALUE ('$kodeKonsumen', '$namaKonsumen', '$provinsi', '$alamat')";

	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php?menu=konsumen&status=sukses');
	} else {
		header('Location: index.php?menu=konsumen&status=gagal');
	}
}
?>