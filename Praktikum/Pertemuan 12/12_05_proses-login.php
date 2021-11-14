<?php  
session_start();
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "linds" && $password == "123456"){
		$_SESSION['username'] = $username;
		header('Location: 12_06_index.php');
	} else {
		echo "<script>
			alert('username dan password salah!');
			window.location.href = '12_04_login.php';
		</script>";
	}
}

?>

