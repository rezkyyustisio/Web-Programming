<?php  
/*
    *Kode untuk mempelajari operasi file dengan php
    * Dibuat oleh       : Rezky Yustisio Hadi Pratama
    * Dibuat tanggal    : 13/10/2020
    * Dimodifikasi      : 13/10/2020
    * Perbaharuan       : Latihan 15
*/

	date_default_timezone_set('Asia/Jakarta');
	if(file_exists("nim.txt")){
		$fileOpen = fopen("nim.txt", "r");
		while(!feof($fileOpen))
		{
			$barisKalimat = fgets($fileOpen, 1024);
			echo $barisKalimat."<br>";
		}
	} else {
		touch("nim.txt");
		$fileOpen = fopen("nim.txt", "w");
		$dataMahasiswa = [
			'nim' => 3201816021,
			'nama' => 'Rezky Yustisio Hadi Pratama',
			'kelas' => '5B',
			'tanggal_update' => date("d F Y / H:i A / H:i:s")
		];
		fwrite($fileOpen, "NIM :".$dataMahasiswa['nim']."\n"."Nama :".$dataMahasiswa['nama']."\n"."Kelas :".$dataMahasiswa['kelas']."\n"."Tanggal update :".$dataMahasiswa['tanggal_update']);
		fclose($fileOpen);

		$fileOpen = fopen("nim.txt", "r");
		while(!feof($fileOpen))
		{
			$barisKalimat = fgets($fileOpen, 1024);
			echo $barisKalimat."<br>";
		}
	}
?>