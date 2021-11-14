<?php
/*
    *Kode untuk memplejari penggunaan isset
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 28/09/2020
    * Dimodifikasi      : 28/09/2020
    * Perbaharuan       : Menambahkan isset untuk pengecekan variabel
*/
if (isset($_POST['nama']) == "Linds"){      
    echo "<p>Hei $_POST[nama]</p>";         
} else {                                    
    echo "<h2>Anda bukan Anggie!</h2>";     
}
// masih dengan contoh yang sama
// namun dengan cara penulisan yang berbeda
if (isset($_POST['nama']) == "Linds"){      
    echo "<p>";
    echo "Hei ";
    echo $_POST['nama'];                    
    echo "</p>";
} else {                                   
    echo "<h2>";
    echo "Anda bukan Linds!";               
    echo "</h2>";
}
?>



