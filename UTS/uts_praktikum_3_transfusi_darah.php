<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transfusi Darah</title>
</head>
<body>
	<form method="post">
		<input type="text" name="golongan_darah_pendonor" placeholder="gol darah pendonor">
		<br><br>
		<input type="text" name="golongan_darah_resipen" placeholder="gol darah resipen">
		<br><br>
		<button type="submit" name="submit">SUBMIT</button>
	</form>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
	$golonganDarahPendonor = $_POST['golongan_darah_pendonor'];
	$golonganDarahResipen = $_POST['golongan_darah_resipen'];

	echo "Golongan darah pendonor adalah = $golonganDarahPendonor <br>";
	echo "Golongan darah resipen adalah = $golonganDarahResipen <br>";

	if($golonganDarahPendonor == "A" && $golonganDarahResipen == "A" || $golonganDarahPendonor == "O" && $golonganDarahResipen == "A"){
		echo "Transfusi dapat dilakukan";
	} else if($golonganDarahPendonor == "B" && $golonganDarahResipen == "B" || $golonganDarahPendonor == "O" && $golonganDarahResipen == "B"){
		echo "Transfusi dapat dilakukan";
	} else if($golonganDarahPendonor == "A" && $golonganDarahResipen == "AB" || $golonganDarahPendonor == "B" && $golonganDarahResipen == "AB" || $golonganDarahPendonor == "AB" && $golonganDarahResipen == "AB" || $golonganDarahPendonor == "O" && $golonganDarahResipen == "AB"){
		echo "Transfusi dapat dilakukan";
	} else if($golonganDarahPendonor == "O" && $golonganDarahResipen == "O") {
		echo "Transfusi dapat dilakukan";
	} else {
		echo "Transfusi gagal dilakukan";
	}
}
?>