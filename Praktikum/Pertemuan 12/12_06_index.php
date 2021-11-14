<?php  
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: 12_04_login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Rezky Yustisio Hadi Pratama 05 | Mahasiswa</title>
</head>
<body>
	<header>
		<h3>Daftar Mahasiswa</h3>
		<h1>POLNEP</h1>

		<nav>
			<ul>
				<li><a href="12_08_form-daftar.php">Daftar Baru</a></li>
				<li><a href="12_09_list-pendaftar.php">List Pendaftar</a></li>
				<li><a href="12_07_logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
</body>
</html>