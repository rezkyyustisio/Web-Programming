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
	<title>Form Daftar</title>
</head>
<body>
	Halaman Form Daftar
</body>
</html>