<?php 
/*
    *Kode untuk memplejari luas dan keliling bangun ruang
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 28/09/2020
    * Dimodifikasi      : 28/09/2020
    * Perbaharuan       : Menghitung Luas Permukaan dan Volume Tabung
*/

$diameter = 14;
$jariJari = 7;
$tinggi = 10;
define("v", 22/7);

$kelilingAlas = v * $diameter;
$luasAlas = v * ($jariJari * $jariJari);
$luasSelimit = $kelilingAlas * $tinggi;

$luasPermukaan = (2 * $luasAlas) + $luasSelimit;
$volume = $luasAlas * $tinggi;

echo "Luas permukaan tabung dengan diameter 16 cm, jari-jari 8 cm dan tinggi 10 cm adalah $luasPermukaan <br><br>";
echo "Volume tabung dengan diameter 16 cm, jari-jari 8 cm dan tinggi 10 cm adalah $volume";
?>