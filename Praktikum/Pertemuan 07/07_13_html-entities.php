<?php
/*
    *Kode untuk mempelajari fungsi string htmlentities
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 12/10/2020
    * Dimodifikasi      : 12/10/2020
    * Perbaharuan       : Menghentikan proses penerjemahan html
*/

	$str = "<script>alert('sistem kamu saya retas!')</script>";
	$strFilterHtml = htmlentities($str);
	echo $strFilterHtml;
?>