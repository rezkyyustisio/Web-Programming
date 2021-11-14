<?php  
/*
    *Kode untuk mempelajari array assosiatif
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Menambahkan nama dan nomor induk untuk setiap elemen dengan jumlahnya sebanyak 6 lalu susun menjadi bentuk tabel
*/

	echo "Associative Array Dua Dimensi: <br><br>";

	$nilai = array(
		array("Nama" => "Rezky Yustsio Hadi Pratama",
			  "Nim" => 3201816021,
			  "Nilai" => array("IPA" => 90, "IPS" => 70, "Bahasa" => 80)
		),
		array("Nama" => "Ali Sabandi",
			  "Nim" => 3201816022,
			  "Nilai" => array("IPA" => 85, "IPS" => 72, "Bahasa" => 86)
		),
		array("Nama" => "Abdul Razak",
			  "Nim" => 3201816023,
			  "Nilai" => array("IPA" => 78, "IPS" => 75, "Bahasa" => 73)
		),
		array("Nama" => "Reza Satria",
			  "Nim" => 3201816024,
			  "Nilai" => array("IPA" => 80, "IPS" => 70, "Bahasa" => 90)
		),
		array("Nama" => "Fawas Hanif",
			  "Nim" => 3201816025,
			  "Nilai" => array("IPA" => 80, "IPS" => 80, "Bahasa" => 80)
		),
		array("Nama" => "Fajar Hermawan",
			  "Nim" => 3201816026,
			  "Nilai" => array("IPA" => 75, "IPS" => 65, "Bahasa" => 78)
		),
	);

	echo "<table cellpadding='10' cellspacing='0' border='1'>";
	echo "<tr><th>Nama</th><th>Nim</th><th>Nilai</th></tr>";	
	foreach($nilai as $row){
		echo "<tr>";
		foreach($row as $key => $isi){
			echo "<td>";
			if($key != "Nilai"){
				echo $isi."  ";
			} else {
				foreach($isi as $key2 => $isi2){
					echo $key2."  ".$isi2." |  ";
				}
			}
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>