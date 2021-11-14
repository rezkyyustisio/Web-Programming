<?php  
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}
?>
<?php require 'inc/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman <?php if(isset($_GET['menu'])){ echo ucwords($_GET['menu']); } else { echo 'Dashboard'; } ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		
		<!-- page Header -->
		<?php require 'header.php'; ?>
		<!-- akhir page Header -->

		<!-- konten -->
		<main>
			<?php  
				if(isset($_GET['menu'])){
					require 'pages/'.$_GET['menu'].'.php';
				} else {
					require 'dashboard.php';
				}
			?>
		</main>
		<!-- akhir Konten -->

<div></div>
		
		<!-- page Footer -->
			<?php require 'footer.php'; ?>
		<!-- akhir page Footer -->
	</div>
</body>
</html>