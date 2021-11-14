<?php  
/*
    *Kode untuk mempelajari sorting array
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Mengurutkan elemen array dari terkecil hingga ke besar menggunakan function sort()
*/

// Mengurutkan array dari kecil ke kecil
$data = array(10, 30, 20, 40, 70, 80, 60, 50, 90, 100);
sort($data);

for($x=0; $x<=10; $x++){
	echo current($data)."<br>"; next($data);
}

echo "<br><br>";

/*
    *Kode untuk mempelajari sorting array
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Mengurutkan elemen array dari terbesar hingga ke kecil menggunakan function rsort()
*/

// Mengurutkan array dari besar ke kecil
$data = array(10, 30, 20, 40, 70, 80, 60, 50, 90, 100);
rsort($data);

for($x=0; $x<=10; $x++){
	echo current($data)."<br>"; next($data);
}
?>