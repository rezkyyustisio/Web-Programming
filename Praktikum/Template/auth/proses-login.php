<?php  
session_start();
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "rezkyyustisio" && $password == "12345678"){
		$_SESSION['username'] = $username;
		header('Location: ../index.php');
	} else {
		echo "<script>
			alert('username dan password salah!');
			window.location.href = '../login.php';
		</script>";
	}
}

?>

