<?php  
/*
	Nama file 		: 13_04_fitur-tambahan.php
	NIM 			: 3201816021
	Nama 			: Rezky Yustisio Hadi Pratama
	Deskripsi 		: Filtering data, sorting, select (untuk menghapus data)
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
			<select name="sorting_data">
				<option value="default">- Sorting Harga -</option>
				<option value="asc">min to max</option>
				<option value="desc">max to min</option>
			</select>

			<select name="filter_data">
				<option value="all">all data</option>
				<option value="merk_sepeda">merk sepeda</option>
				<option value="jenis_sepeda">jenis sepeda</option>
				<option value="ukuran_sepeda">ukuran sepeda</option>
			</select>
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
				<th>Multiple</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sql = "SELECT * FROM sepeda"; 
				
				if(isset($_GET['cari'])){
					echo "Hasil pencarian ".$_GET['cari'];
				}

				// Fitur Pagination
				$halaman = 2;
				$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($db, $sql);
				$total = mysqli_num_rows($result);
				$pages = ceil($total/$halaman);
				$query = mysqli_query($db, "SELECT * FROM sepeda LIMIT $mulai, $halaman");
				// akhir Pagination

				if(isset($_GET['cari'])){
					$sortingData = $_GET['sorting_data'];
					$filterData = $_GET['filter_data'];
					$cari = $_GET['cari'];

					// Fitur Sorting data
					if($sortingData != "default"){
						$kondisiSort = "ORDER BY harga_sepeda $sortingData";
					} else {
						$kondisiSort = "";
					}

					$query = mysqli_query($db, "SELECT * FROM sepeda $kondisiSort LIMIT $mulai, $halaman");

					// Fitur Filter data
					if($filterData == "all"){
						$query = mysqli_query($db, "SELECT * FROM sepeda WHERE merk_sepeda LIKE '%$cari%' OR jenis_sepeda LIKE '%$cari%' OR ukuran_sepeda LIKE '%$cari%' $kondisiSort");
					} else {
						$query = mysqli_query($db, "SELECT * FROM sepeda WHERE $filterData LIKE '%$cari%' $kondisiSort");
					}
				}

				$no = $mulai + 1;
				while($list = mysqli_fetch_array($query))
				{
					echo "<tr>";
						echo "<td>";
							echo $no++;
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

						echo "<form method='POST'>";
								echo "<td>";
									echo "<input type='checkbox' name=hapus-sepeda[] value=".$list['id'].">";
								echo "</td>";
				}
			?>
		</tbody>
	</table>
		<div style="float: right; margin-top: 15px;">
			<button type="submit" name="hapus-multiple">hapus multiple data</button>
		</div>
	</form>

	<div style="text-align: center; margin-top: 20px;">
	<?php 
	// First
	if(isset($_GET['halaman'])){
		if($_GET['halaman'] > 1){
			?>
			<a style="font-style: underline;" href="?halaman=<?php echo 1; ?>">First</a>
			<?php
		}
	}
	?>

	<?php if(!isset($_GET['filter_data'])): ?>
	  <?php for($i=1; $i<=$pages ; $i++): ?>
	  	<?php $last = $i; ?>
	  	<?php if(!isset($_GET['halaman'])): ?>
	  		<a style="font-style: underline;" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
	  	<?php else: ?>
			<?php if($i == $_GET['halaman']): ?>
		  		<a style="text-decoration: none; color: black; font-style: underline;" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
		  	<?php else: ?>
		  		<a style="font-style: underline;" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
		  	<?php endif; ?>
		<?php endif; ?>
	  <?php endfor; ?>
	<?php endif; ?>

	<?php 
	// Last
		if(isset($_GET['halaman'])){
			if($_GET['halaman'] != $last){
				?>
				<a style="font-style: underline;" href="?halaman=<?php echo $last; ?>">Last</a>
				<?php
			}
		} else {
			?>
			<a style="font-style: underline;" href="?halaman=<?php echo $last; ?>">Last</a>
			<?php
		}
	?>
	</div>

	<?php if(isset($_POST['hapus-multiple'])): ?>
		<?php 
			$hapusSepeda = $_POST['hapus-sepeda'];
			foreach($hapusSepeda as $hs){
				$sql = "DELETE FROM sepeda WHERE id = '$hs'";
				$query = mysqli_query($db, $sql);
				header('Location: '.$_SERVER['REQUEST_URI']);
			}
		?>
	<?php endif; ?>
</body>
</html>