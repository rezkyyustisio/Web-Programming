<?php  
$uang = 20000;
$jumlahAdik = 2;
$sisaUang = $uang % $jumlahAdik;
$hasil = ($uang - $sisaUang)/$jumlahAdik;
echo $hasil;
?>