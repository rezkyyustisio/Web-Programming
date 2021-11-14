<?php 
require 'sidebar.php';

$sqlSepeda = "SELECT * FROM sepeda";  
$sqlPenjualan = "SELECT * FROM penjualan";  
$sqlKonsumen = "SELECT * FROM konsumen";  

$resultSepeda = mysqli_query($db, $sqlSepeda);
$resultPenjualan = mysqli_query($db, $sqlPenjualan);
$resultKonsumen = mysqli_query($db, $sqlKonsumen);

$totalSepeda = mysqli_num_rows($resultSepeda);
$totalPenjualan = mysqli_num_rows($resultPenjualan);
$totalKonsumen = mysqli_num_rows($resultKonsumen);
?>

<section class="content-home">
	<fieldset>
		<img width="100" src="img/bycicle.png" alt="sepeda"> <h3>Total Sepeda <?php echo $totalSepeda ?></h3>
	</fieldset>
	<fieldset>
		<img width="100" src="img/goods.png" alt="penjualan"> <h3>Total Penjualan <?php echo $totalPenjualan ?></h3>
	</fieldset>
	<fieldset>
		<img width="100" src="img/consumer-behavior.png" alt=""><h3>Total Konsumen <?php echo $totalKonsumen ?></h3>
	</fieldset>
</section>