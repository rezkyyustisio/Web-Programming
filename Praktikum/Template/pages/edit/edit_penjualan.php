<?php  
require 'sidebar.php';

$id = $_GET['id'];

$sql = "SELECT * FROM penjualan WHERE id = '$id'";
$query = mysqli_query($db, $sql);
$list = mysqli_fetch_assoc($query);

$queryMerkSepeda = mysqli_query($db, "SELECT * FROM sepeda");
$queryKonsumen = mysqli_query($db, "SELECT * FROM konsumen");
?>

<section class="content-penjualan">
	<form method="POST" action="?menu=<?php echo $_GET['menu']; ?>&id=<?php echo $id; ?>" style="float: left; width: 800px;">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $list['id'] ?>">
			<p>
				<label for="merk-sepeda">Merk Sepeda: </label>
				<select name="merkSepeda" id="merk-sepeda">
					<?php while($listMerkSepeda = mysqli_fetch_object($queryMerkSepeda)): ?>
						<?php if($listMerkSepeda->id == $list['id_sepeda']): ?>
							<option selected value="<?php echo $listMerkSepeda->id; ?>"><?php echo $listMerkSepeda->merk_sepeda; ?></option>
						<?php else: ?>
							<option value="<?php echo $listMerkSepeda->id; ?>"><?php echo $listMerkSepeda->merk_sepeda; ?></option>
						<?php endif; ?>
					<?php endwhile; ?>
				</select>
			</p>
		<br>
			<p>
				<label for="konsumen">Konsumen: </label>
				<select name="konsumen" id="konsumen">
					<?php while($listKonsumen = mysqli_fetch_object($queryKonsumen)): ?>
						<?php if($listKonsumen->id == $list['id_konsumen']): ?>
							<option selected value="<?php echo $listKonsumen->id; ?>"><?php echo $listKonsumen->nama_konsumen; ?></option>
						<?php else: ?>
							<option value="<?php echo $listKonsumen->id; ?>"><?php echo $listKonsumen->nama_konsumen; ?></option>
						<?php endif; ?>
					<?php endwhile; ?>
				</select>
			</p>
		<br>
			<p>
				<label for="qty">Qty: </label>
				<input type="number" name="qty" id="qty" placeholder="Jumlah sepeda" value="<?php echo $list['qty'] ?>">
			</p>
		<br>
			<p>
				<label for="jumlah-setoran">Jumlah Setoran: </label>
				<input type="number" name="jumlahSetoran" id="jumlah-setoran" placeholder="Jumlah setoran biaya" value="<?php echo $list['jumlah_setor_uang'] ?>">
			</p>
		<br>
			<p>
				<input type="submit" value="Ubah" name="ubahPenjualan">
			</p>
		</fieldset>
	</form>
</section>

<?php  
if(isset($_POST['ubahPenjualan'])){

	$id = $_POST['id'];
	$konsumen = $_POST['konsumen'];
	$merkSepeda = $_POST['merkSepeda'];
	$qty = $_POST['qty'];
	$jumlahSetoran = $_POST['jumlahSetoran'];

	$sql = "UPDATE penjualan SET id_sepeda = '$merkSepeda', id_konsumen = '$konsumen', qty = '$qty', jumlah_setor_uang = '$jumlahSetoran' WHERE id = '$id'";

	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php?menu=penjualan&status=sukses');
	} else {
		header('Location: index.php?menu=penjualan&status=gagal');
	}
}
?>