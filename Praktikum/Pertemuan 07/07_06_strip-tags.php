<?php  
	$situsSpammer = "Silahkan <u>berkunjung</u> ke <a href='http://situsspammer.com'> Toko komputer terpecaya!
	<strong>Aneka jenis barang</strong></a>";

	$filterLink = $situsSpammer;
	echo $filterLink;
?>

<?php echo "<br><br>"; ?>

<?php 
	/*
	    *Kode untuk mempelajari fungsi string strip_tags
	    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
	    * Dibuat tanggal    : 12/10/2020
	    * Dimodifikasi      : 12/10/2020
	    * Perbaharuan       : Memfilter tag yang di izinkan untuk ditampilkan
	*/

	$filterLink = strip_tags($situsSpammer, "<strong><u>");
	echo $filterLink;
?>