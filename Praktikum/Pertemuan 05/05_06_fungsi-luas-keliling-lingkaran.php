<?php 

/*
    *Kode untuk memplejari fungsi
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 05/10/2020
    * Dimodifikasi      : 05/10/2020
    * Perbaharuan       : membuat function untuk menghitung luas dan keliling lingkaran
*/ 

function lingkaran($jariJari, $sistem){
	define("v", 22/7);
	$convertSistem = strtolower($sistem);
$hasil = "<pre>jari-jari = $jariJari
v = ".v."
";
	if($convertSistem == "luas"){
		$luas = v * ($jariJari * $jariJari);
		$hasil .= "Luas dari lingkaran dengan jari-jari $jariJari adalah $luas</pre>";
	} else if($convertSistem == "keliling"){
		$keliling = v * 2 * $jariJari;
		$hasil .= "Keliling dari lingkaran dengan jari-jari $jariJari adalah $keliling </pre>";
	} else {
		$hasil = "sistem tidak ditemukan";
	}

	return $hasil;
}

echo "<pre>sistem lingkaran:
1. luas
2. keliling
</pre>";

echo lingkaran(50, "keliling");
?>