<?php 

$x = 20;
$y = 20;
echo "$x dan $y <br>";

echo "Perbandingan ==";
var_dump($x == $y);
echo "<br><br>";

echo "Perbandingan >";
var_dump($x > $y);
echo "<br><br>";

echo "Perbandingan (<) ";
var_dump($x < $y);
echo "<br><br>";

echo "Perbandingan >=";
var_dump($x >= $y);
echo "<br><br>";

echo "Perbandingan <=";
var_dump($x <= $y);
echo "<br><br>";

echo "<hr>";

$x = '20';
$y = 20;
echo "'$x' dan $y <br>";
echo "Perbandingan ==";
var_dump($x == $y);
echo "<br><br>";

echo "Perbandingan ===";
var_dump($x === $y);
echo "<br><br>";

echo "Output dari == dan === berbeda karena == hanya membandingkan angkanya saja <br> sedangkan === membandingkan tipe datanya dan angkanya jadi bisa disimpulkan kenapa pada perbandingan === bisa false karena variabel x tipe datanya char/string";
?>