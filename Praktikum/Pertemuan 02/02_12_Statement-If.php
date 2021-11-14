<?php  

$nama = "Toni";

$message = "Selamat datang $nama!";
if($nama == "Jobs"){
	$message = "Hi, it's an honor to greet you, $nama!";
}
echo $message;

echo "<br><br>";
echo '$nama = Rezky Yustisio Hadi Pratama <br>';
$nama = "Rezky Yustisio Hadi Pratama";

$message = "Selamat datang $nama!";
if($nama == "Jobs"){
	$message = "Hi, it's an honor to greet you, $nama!";
}
echo $message;


echo "<br><br>";
echo '$nama = Jobs <br>';
$nama = "Jobs";

$message = "Selamat datang $nama!";
if($nama == "Jobs"){
	$message = "Hi, it's an honor to greet you, $nama!";
}
echo $message;

echo "<br><br>";
echo "Pada statement if, perbandingannya adalah variabel nama dengan string Jobs, <br> jika variabel nama isinya bukan Jobs maka variabel message yang di echo adalah variabel message yang diluar if";
?>