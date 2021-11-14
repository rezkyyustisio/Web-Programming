<?php 
/*
    *Kode untuk mempelajari array 2 dimensi
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 06/10/2020
    * Dimodifikasi      : 06/10/2020
    * Perbaharuan       : Menampilkan array 2 dimensi dengan menggunakan for
*/
?>
<table>
	<tr><td>Nama</td><td>Jurusan</td><td>Jenis Kelamin</td><td>Usia</td></tr>
	<?php 
		$mahasiswa = array(
			array("Lindung", "Teknik Informatika", "Laki-laki", 23),
			array("Fitri", "Sistem Informasi", "Perempuan", 22),
			array("Ridwan", "Majemen Informatika", "Laki-laki", 24),
			array("Heru", "Teknik Komputer", "Laki-laki", 20),
			array("Marsel", "Teknik Informatika", "Laki-laki", 24)
		);

		for($row = 0; $row < 5; $row++){
			echo "<tr>";
			for($col = 0; $col < 4; $col++){
				echo "<td>".$mahasiswa[$row][$col]."</td>";
			}
			echo "</tr>";
		}
	?>
</table>