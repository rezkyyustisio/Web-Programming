<?php  
require 'sidebar.php';

$id = $_GET['id'];

$sql = "SELECT * FROM sepeda WHERE id = '$id'";
$query = mysqli_query($db, $sql);
$list = mysqli_fetch_assoc($query);
?>

<section class="content-sepeda">
	<form method="POST" action="?menu=<?php echo $_GET['menu']; ?>&id=<?php echo $id; ?>" style="float: left; width: 800px;">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $list['id'] ?>">
			<p>
				<label for="no-seri">No. seri: </label>
				<input type="text" name="noSeri" id="no-seri" placeholder="Nomor seri sepeda" value="<?php echo $list['nomor_seri_sepeda'] ?>">
			</p>
		<br>
			<p>
				<label for="merk-sepeda">Merk sepeda: </label>
				<input type="text" name="merkSepeda" id="merk-sepeda" placeholder="Merk sepeda" value="<?php echo $list['merk_sepeda'] ?>" required>
			</p>
		<br>
			<p>
				<label for="jenis-sepeda">Jenis sepeda: </label>
				<input type="text" name="jenisSepeda" id="jenis-sepeda" placeholder="Jenis sepeda" value="<?php echo $list['jenis_sepeda'] ?>">
			</p>
		<br>
			<p>
				<label for="harga-sepeda">Harga Sepeda: </label>
				<input type="number" name="hargaSepeda" id="harga-sepeda" placeholder="Harga sepeda" value="<?php echo $list['harga_sepeda'] ?>">
			</p>
		<br>
			<p>
				<label for="ukuran-sepeda">Ukuran Sepeda: </label>
				<?php $listUkuranSepeda = ['X', 'M', 'S', 'L']; ?>
				<select name="ukuranSepeda" id="ukuran-sepeda">
					<?php for($i = 0; $i < count($listUkuranSepeda); $i++): ?>
						<?php if($listUkuranSepeda[$i] == $list['ukuran_sepeda']): ?>
							<option selected value="<?php echo $listUkuranSepeda[$i]; ?>"><?php echo $listUkuranSepeda[$i]; ?></option>
						<?php else: ?>
							<option value="<?php echo $listUkuranSepeda[$i]; ?>"><?php echo $listUkuranSepeda[$i]; ?></option>
						<?php endif; ?>
					<?php endfor; ?>
				</select>
			</p>
		<br>
			<p>
				<label for="ketersediaan-sepeda">Ketersediaan Sepeda: </label>
				<input type="date" placeholder="Kapan sepeda ada" name="ketersediaanSepeda" value="<?php echo $list['ketersedian_sepeda']; ?>">
			</p>
		<br>
			<p>
				<input type="submit" value="Ubah" name="ubahSepeda">
			</p>
		</fieldset>
	</form>
</section>

<?php 
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

	if($query){
		header('Location: index.php?menu=sepeda&status=sukses');
	} else {
		header('Location: index.php?menu=sepeda&status=gagal');
	}
}
?>