<?php 

define('PI', 3.14159265);
echo PI;
echo "<br><br>";

echo "Menambahkan parameter ketiga pada fungsi define() dengan nilai true <br>";
define('PI', 3.14159265, true);
echo PI;

echo "<br>";
define('PI', 3.14, true);
echo PI;

echo "<br><br>";
echo "Nilai konstanta tetap tidak akan berubah karena nilai konstanta nilainya tetap kecuali variabel";
?>