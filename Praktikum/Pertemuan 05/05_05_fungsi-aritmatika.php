<?php 

/*
    *Kode untuk memplejari fungsi
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 05/10/2020
    * Dimodifikasi      : 05/10/2020
    * Perbaharuan       : fungsi aritmatika menggunakan function
*/ 

function hitung($angkaPertama, $angkaKedua, $fungsiAritmatika){
	$convertFungsi = strtolower($fungsiAritmatika);
	if($convertFungsi == "tambah"){
		return $angkaPertama." + ".$angkaKedua." = ".$angkaPertama + $angkaKedua;
	} else if($convertFungsi == "kurang"){
		return $angkaPertama." - ".$angkaKedua." = ".$angkaPertama - $angkaKedua;
	} else if($convertFungsi == "kali"){
		return $angkaPertama." * ".$angkaKedua." = ".$angkaPertama * $angkaKedua;
	} else if($convertFungsi == "bagi"){
		return $angkaPertama." / ".$angkaKedua." = ".$angkaPertama / $angkaKedua;
	} else if($convertFungsi == "modulus"){
		return $angkaPertama." % ".$angkaKedua." = ".$angkaPertama % $angkaKedua;
	} else {
		return "fungsi aritmatika tidak ditemukan";
	}
}

echo "<pre>daftar jenis fungsi aritmatika:
1. tambah
2. kurang
3. kali
4. bagi
5. modulus</pre>";

echo hitung(5, 20, "bagi");
?>