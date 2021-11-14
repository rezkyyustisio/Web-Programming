<?php 
/*
    *Kode untuk memplejari luas dan keliling bangun datar
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 28/09/2020
    * Dimodifikasi      : 28/09/2020
    * Perbaharuan       : Menghitung Luas dan Keliling Lingkaran
*/

// Luas Lingkaran
define("v", 22/7);
$jariJari = 14;
$luas = v * ($jariJari * $jariJari);
echo "Luas dari lingkaran dengan jari-jari $jariJari adalah $luas <br><br>";

// Keliling Trapesium
$keliling = v * 2 * $jariJari;
echo "Keliling dari lingkaran dengan jari-jari $jariJari adalah $keliling";
?>