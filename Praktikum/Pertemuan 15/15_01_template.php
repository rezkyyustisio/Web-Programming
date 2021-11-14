<?php  
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: 12_01_login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Outlet Sepeda Rezky Yustisio</title>
	<link rel="stylesheet" href="15_02_style.css">
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h1>Aplikasi Toko Sepeda</h1>
			<p>Ada Harga Ada Kualitas</p>
		</div>
		<div class="menu">
			<ul>
				<li><marquee>Selamat datang rezky yustisio</marquee></li>
			</ul>
			<br>
			<ul class="navigasi">
				<li><a href="12_02_logout.php">Logout</a></li>
				<li><a href="15_01_template.php">Home</a></li>
			</ul>
		</div>
		<div class="badan">
			<div class="sidebar">
				Menu Sidebar <br><br>
				<ul>
					<li><a href="15_01_template.php?menu=13_01_list-sepeda">Sepeda</a></li>
				</ul>
			</div>
			<div class="content">
				<?php if(isset($_GET['menu'])){
					include($_GET['menu'].'.php');
				} else {
					echo "<h1>Halaman Home</h1>";
				} ?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			3201816021 / Rezky Yustisio Hadi Pratama
		</div>
	</div>
</body>
</html>