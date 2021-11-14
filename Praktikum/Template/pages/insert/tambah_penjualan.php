<?php  
require 'sidebar.php';

$queryMerkSepeda = mysqli_query($db, "SELECT * FROM sepeda");
$queryKonsumen = mysqli_query($db, "SELECT * FROM konsumen");
?>

<section class="content-penjualan">
	<form method="POST" action="?menu=<?php echo $_GET['menu']; ?>" style="float: left; width: 800px;">
		<fieldset>
			<p>
				<label for="merk-sepeda">Merk Sepeda: </label>
				<select name="merkSepeda" id="merk-sepeda">
					<?php while($listMerkSepeda = mysqli_fetch_object($queryMerkSepeda)): ?>
						<option value="<?php echo $listMerkSepeda->id ?>"><?php echo $listMerkSepeda->merk_sepeda ?></option>
					<?php endwhile; ?>
				</select>
			</p>
		<br>
			<p>
				<label for="konsumen">Konsumen: </label>
				<select name="konsumen" id="konsumen">
					<?php while($listKonsumen = mysqli_fetch_object($queryKonsumen)): ?>
						<option value="<?php echo $listKonsumen->id ?>"><?php echo $listKonsumen->nama_konsumen ?></option>
					<?php endwhile; ?>
				</select>
			</p>
		<br>
			<p>
				<label for="qty">Qty: </label>
				<input type="number" name="qty" id="qty" placeholder="Jumlah sepeda">
			</p>
		<br>
			<p>
				<label for="jumlah-setoran">Jumlah Setoran: </label>
				<input type="number" name="jumlahSetoran" id="jumlah-setoran" placeholder="Jumlah setoran biaya">
			</p>
		<br>
			<p>
				<input type="submit" value="Tambah" name="tambahPenjualan">
			</p>
		</fieldset>
	</form>
</section>

<?php 
if(isset($_POST['tambahPenjualan'])){

	$konsumen = $_POST['konsumen'];
	$merkSepeda = $_POST['merkSepeda'];
	$qty = $_POST['qty'];
	$jumlahSetoran = $_POST['jumlahSetoran'];

	$sql = "INSERT INTO penjualan (id_sepeda, id_konsumen, qty, jumlah_setor_uang, status) VALUE ('$merkSepeda', '$konsumen', '$qty', '$jumlahSetoran', 'pending')";

	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php?menu=penjualan&status=sukses');
	} else {
		header('Location: index.php?menu=penjualan&status=gagal');
	}
}
?>