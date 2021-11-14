<?php 
	if(!isset($_SESSION['username'])){
		header("Location: 12_01_login.php");
	}
?>

<?php  
/*
	Nama file 		: 16_04_list-konsumen.php
	NIM 			: 3201816021
	Nama 			: Rezky Yustisio Hadi Pratama
	Deskripsi 		: Menampilkan list konsumen
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
	<h3>Halaman Konsumen</h3><br>
	<header>Sepeda yang terdaftar</header>
	
	<nav>
		<a href="11_01_form_sepeda.php">[+] Tambah</a>
		<form action="16_01_template.php" method="GET" style="float: right">
			<input type="text" name="cari" placeholder="cari konsumen" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];} ?>">
			<input type="hidden" name="menu" value="16_05_list-sepeda">
			<button type="submit" name="cari-sepeda">Submit</button>
		</form>
	</nav>

	<table border="1" cellpadding="10" cellspacing="0" style="width: 100%;">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Konsumen</th>
				<th>Nama Konsumen</th>
				<th>Provinsi</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sql = "SELECT * FROM konsumen"; 

				if(isset($_GET['cari'])){
					echo "Hasil pencarian ".$_GET['cari'];
				}

				if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$sql = "SELECT * FROM konsumen WHERE nama_konsumen LIKE '%$cari%'";
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
							echo $list['kode_konsumen'];
						echo "</td>";

						echo "<td>";
							echo $list['nama_konsumen'];
						echo "</td>";

						echo "<td>";
							echo $list['provinsi'];
						echo "</td>";

						echo "<td>";
							echo $list['alamat'];
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