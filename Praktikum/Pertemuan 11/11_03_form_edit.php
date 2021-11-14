<?php 

include("10_01_koneksi.php");

if(!isset($_GET['id'])){
	header('Location: 10_03_list_sepeda.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM sepeda WHERE id = '$id'";
$query = mysqli_query($db, $sql);
$list = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
	die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Sepeda | Outlet Rezky Yustisio</title>
</head>
<body>
	<header><h3>Form Edit Sepeda</h3></header>

	<form action="11_04_proses_edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $list['id'] ?>">

			<p>
				<label for="no-seri">No. seri: </label>
				<input type="text" name="noSeri" id="no-seri" value="<?php echo $list['nomor_seri_sepeda'] ?>" placeholder="Nomor seri sepeda">
			</p>

			<p>
				<label for="merk-sepeda">Merk sepeda: </label>
				<input type="text" name="merkSepeda" id="merk-sepeda" value="<?php echo $list['merk_sepeda'] ?>" placeholder="Merk sepeda" required>
			</p>

			<p>
				<label for="jenis-sepeda">Jenis sepeda: </label>
				<input type="text" name="jenisSepeda" id="jenis-sepeda" value="<?php echo $list['jenis_sepeda'] ?>" placeholder="Jenis sepeda">
			</p>

			<p>
				<label for="harga-sepeda">Harga Sepeda: </label>
				<input type="number" name="hargaSepeda" id="harga-sepeda" value="<?php echo $list['harga_sepeda'] ?>" placeholder="Harga sepeda">
			</p>

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

			<p>
				<label for="ketersediaan-sepeda">Ketersediaan Sepeda: </label>
				<input type="date" placeholder="Kapan sepeda ada" value="<?php echo $list['ketersedian_sepeda']; ?>" name="ketersediaanSepeda">
			</p>

			<p>
				<input type="submit" value="Simpan" name="ubahSepeda">
			</p>
		</fieldset>
	</form>
</body>
</html>