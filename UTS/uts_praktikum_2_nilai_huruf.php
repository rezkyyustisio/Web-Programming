<?php  
echo "Nilai akhirnya adalah 80 <br>";
$nilaiAkhir = 80;
$nilaiHuruf = '';

if(!isset($nilaiAkhir)){
	// Penanganan error jika variabel nilai akhir tidak ada
	echo "Variabel nilai akhir tidak terdefinisi, harap didefinisi dengan cara \$nilaiHuruf = (nilai yang akan dimasukan)";
	exit;
	
} else {

	if(is_string($nilaiAkhir)){
		// Penanganan error jika nilai pada variabel nilai akhir adalah string
		echo "Nilai pada variabel bukanlah angka melainkan string";
		exit;
	}

	if($nilaiAkhir >= 80 && $nilaiAkhir <= 100){
		$nilaiHuruf = 'A';
	} else if($nilaiAkhir >= 60 && $nilaiAkhir <= 80){
		$nilaiHuruf = 'B';
	} else if($nilaiAkhir >= 40 && $nilaiAkhir <= 60){
		$nilaiHuruf = 'C';
	} else if($nilaiAkhir >= 20 && $nilaiAkhir <= 40){
		$nilaiHuruf = 'D';
	} else if($nilaiAkhir >= 0 && $nilaiAkhir <= 20){
		$nilaiHuruf = 'E';
	} else {
		// Penanganan error jika angka melebihi seratus ataupun minus
		$nilaiHuruf = 'Terdapat kesalahan pada nilai yakni nilai adalah '.$nilaiAkhir;
	}

	echo "Nilai huruf = ".$nilaiHuruf;
}
?>