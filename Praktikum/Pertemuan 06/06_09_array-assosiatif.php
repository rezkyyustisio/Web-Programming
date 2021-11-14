<?php  
/*
    *Kode untuk mempelajari array assosiatif
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Menampilkan elemen array assosiatif beserta key dan valuenya
*/

	echo "Associative Array Dua Dimensi: <br>";

	$nilai = array(
		array("IPA" => 90, "IPS" => 65, "Bahasa" => 83),
		array("IPA" => 90, "IPS" => 78, "Bahasa" => 87),
		array("IPA" => 78, "IPS" => 90, "Bahasa" => 78)
	);

	// Mengakses elemen array dengan looping
	echo "<ul>";
	for($r=0; $r<count($nilai); $r++){
		echo "<li>";
		foreach($nilai[$r] as $key=>$value){
			echo $key." = ".$value."  ";
		}
		echo "</li>";
		echo "<br><br>";
	}
	echo "</ul>";
?>