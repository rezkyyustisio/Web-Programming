<?php 

/*
    *Kode untuk memplejari fungsi
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 05/10/2020
    * Dimodifikasi      : 05/10/2020
    * Perbaharuan       : membuat function untuk menghitung luas permukaan dan volume tabung
*/ 

function tabung($diameter, $jariJari, $tinggi, $sistem){
	define("v", 22/7);
	$convertSistem = strtolower($sistem);

	$kelilingAlas = v * $diameter;
	$luasAlas = v * ($jariJari * $jariJari);
	$luasSelimit = $kelilingAlas * $tinggi;

	$luasPermukaan = (2 * $luasAlas) + $luasSelimit;
	$volume = $luasAlas * $tinggi;

$hasil = "<pre>diameter = $diameter
jari-jari = $jariJari
tinggi = $tinggi
v = ".v."
";

	if($convertSistem == "luas_permukaan"){
		$hasil .= "Luas permukaan tabung dengan diameter $diameter cm, jari-jari $jariJari cm dan tinggi $tinggi cm adalah $luasPermukaan </pre>";
	} else if($convertSistem == "volume"){
		$hasil .= "Volume tabung dengan diameter $diameter cm, jari-jari $jariJari cm dan tinggi $tinggi cm adalah $volume </pre>";
	} else {
		$hasil = "sistem tidak ditemukan";
	}

	return $hasil;
}

echo "<pre>sistem tabung:
1. luas_permukaan
2. volume
</pre>";

echo tabung(14, 7, 10, "volume");
?>