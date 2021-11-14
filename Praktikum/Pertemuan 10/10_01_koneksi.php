<?php  
// Nama file
$server = "localhost";
$user = "root";
$password = "";
$namaDatabase = "outlet_sepeda_05";

$db = mysqli_connect($server, $user, $password, $namaDatabase);

if(!$db){
	die("Gagal terhubung dengan database: ".mysqli_connect_error());
}
?>