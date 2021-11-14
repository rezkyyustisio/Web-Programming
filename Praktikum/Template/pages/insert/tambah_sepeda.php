<?php  
require 'sidebar.php';
?>

<section class="content-sepeda">
	<form method="POST" action="?menu=<?php echo $_GET['menu']; ?>" style="float: left; width: 800px;">
		<fieldset>
			<p>
				<label for="no-seri">No. seri: </label>
				<input type="text" name="noSeri" id="no-seri" placeholder="Nomor seri sepeda">
			</p>
		<br>
			<p>
				<label for="merk-sepeda">Merk sepeda: </label>
				<input type="text" name="merkSepeda" id="merk-sepeda" placeholder="Merk sepeda" required>
			</p>
		<br>
			<p>
				<label for="jenis-sepeda">Jenis sepeda: </label>
				<input type="text" name="jenisSepeda" id="jenis-sepeda" placeholder="Jenis sepeda">
			</p>
		<br>
			<p>
				<label for="harga-sepeda">Harga Sepeda: </label>
				<input type="number" name="hargaSepeda" id="harga-sepeda" placeholder="Harga sepeda">
			</p>
		<br>
			<p>
				<label for="ukuran-sepeda">Ukuran Sepeda: </label>
				<select name="ukuranSepeda" id="ukuran-sepeda">
					<option value="">--</option>
					<option value="X">X</option>
					<option value="M">M</option>
					<option value="S">S</option>
					<option value="L">L</option>
				</select>
			</p>
		<br>
			<p>
				<label for="ketersediaan-sepeda">Ketersediaan Sepeda: </label>
				<input type="date" placeholder="Kapan sepeda ada" name="ketersediaanSepeda">
			</p>
		<br>
			<p>
				<input type="submit" value="Tambah" name="tambahSepeda">
			</p>
		</fieldset>
	</form>
</section>

<?php 
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
		header('Location: index.php?menu=sepeda&status=sukses');
	} else {
		header('Location: index.php?menu=sepeda&status=gagal');
	}
}
?>