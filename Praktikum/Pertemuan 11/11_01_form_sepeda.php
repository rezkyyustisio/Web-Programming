<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Sepeda Baru | Outlet Rezky Yustisio</title>
</head>
<body>
	<header>
		<h1>Form Pemasukan Sepeda Baru</h1>
	</header>

	<form action="11_02_proses_sepeda.php" method="POST">
		<fieldset>
			<p>
				<label for="no-seri">No. seri: </label>
				<input type="text" name="noSeri" id="no-seri" placeholder="Nomor seri sepeda">
			</p>

			<p>
				<label for="merk-sepeda">Merk sepeda: </label>
				<input type="text" name="merkSepeda" id="merk-sepeda" placeholder="Merk sepeda" required>
			</p>

			<p>
				<label for="jenis-sepeda">Jenis sepeda: </label>
				<input type="text" name="jenisSepeda" id="jenis-sepeda" placeholder="Jenis sepeda">
			</p>

			<p>
				<label for="harga-sepeda">Harga Sepeda: </label>
				<input type="number" name="hargaSepeda" id="harga-sepeda" placeholder="Harga sepeda">
			</p>

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

			<p>
				<label for="ketersediaan-sepeda">Ketersediaan Sepeda: </label>
				<input type="date" placeholder="Kapan sepeda ada" name="ketersediaanSepeda">
			</p>

			<p>
				<input type="submit" value="Tambah" name="tambahSepeda">
			</p>
		</fieldset>
	</form>
</body>
</html>