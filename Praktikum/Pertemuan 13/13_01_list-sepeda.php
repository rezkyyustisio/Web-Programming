<?php  
/*
	Nama file 		: 13_01_list-sepeda.php
	NIM 			: 3201816021
	Nama 			: Rezky Yustisio Hadi Pratama
	Deskripsi 		: Menampilkan list sepeda
*/
	include("10_01_koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendaftaran Baru | Sepeda</title>
		<style>
			 body {
			 	font-family: arial;
			 }

			 table {
			 	margin-top: 15px;
			 }
		</style>
</head>
<body>
	<header>Sepeda yang terdaftar</header>
	
	<nav>
		<a href="11_01_form_sepeda.php">[+] Tambah</a>
		<form action="" method="GET" style="float: right">
			<input type="text" name="cari" placeholder="cari sepeda" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
			<button type="submit" name="cari-sepeda">Submit</button>
		</form>
	</nav>

	<table border="1" cellpadding="10" cellspacing="0" style="width: 100%;">
		<thead>
			<tr>
				<th>No</th>
				<th>Nomor Seri Sepeda</th>
				<th>Merk Sepeda</th>
				<th>Jenis Sepeda</th>
				<th>Harga Sepeda</th>
				<th>Ukuran Sepeda</th>
				<th>Ketersedian Sepeda</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sql = "SELECT * FROM sepeda"; 

				if(isset($_GET['cari'])){
					echo "Hasil pencarian ".$_GET['cari'];
				}

				if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$sql = "SELECT * FROM sepeda WHERE merk_sepeda LIKE '%$cari%'";
				}
				
				$query = mysqli_query($db, $sql);
				$total = mysqli_num_rows($query);

				$no = 0;
				while($list = mysqli_fetch_array($query))
				{
					$no++;
					echo "<tr>";
						echo "<td>";
							echo $no;
						echo "</td>";

						echo "<td>";
							echo $list['nomor_seri_sepeda'];
						echo "</td>";

						echo "<td>";
							echo $list['merk_sepeda'];
						echo "</td>";

						echo "<td>";
							echo $list['jenis_sepeda'];
						echo "</td>";

						echo "<td>";
							echo "Rp. ".number_format($list['harga_sepeda'], 2, ',','.');
						echo "</td>";

						echo "<td>";
							echo $list['ukuran_sepeda'];
						echo "</td>";

						echo "<td>";
							echo date('d M Y', strtotime($list['ketersedian_sepeda']));
						echo "</td>";

						echo "<td>";
							echo "<a href='11_03_form_edit.php?id=".$list['id']."'>Edit</a> | ";
							echo "<a href='11_05_hapus.php?id=".$list['id']."'>Hapus</a>";
						echo "</td>";
				}
			?>
		</tbody>
	</table>
</body>
</html>