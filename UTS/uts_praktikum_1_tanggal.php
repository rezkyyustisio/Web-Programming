<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Waktu</title>
</head>
<body>
	<?php 
	date_default_timezone_set('Asia/Jakarta');
	$date = date('Ymtl N');
	$getHari = date('l', strtotime($date));
	$getTanggal = date('t', strtotime($date));

	$indeksHari = date('N', strtotime(date('Y-m-d N'))) - 1;
	$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum`at", "Sabtu", "Minggu"];
	?>
	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
				<th>Tanggal</th>
				<th>Hari</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i = 1; $i <= $getTanggal; $i++): ?>
			<?php $indeksHari++; ?>
			<tr>
				<td><?php echo date("$i/m/Y") ?></td>
				<?php if($indeksHari > 7): ?>
				<?php $indeksHari = 1; ?>
					<td><?php echo $hari[$indeksHari-1] ?></td>
				<?php else: ?>
					<?php if($hari[$indeksHari-1] == $getHari): ?>
						<td><?php echo $hari[$indeksHari-1] ?></td>
						<?php elseif($hari[$indeksHari-1] == "Minggu"): ?>
							<!-- Memberi warna di hari minggu -->
							<td style="background-color: red;"><?php echo $hari[$indeksHari-1] ?></td>
						<?php elseif($hari[$indeksHari-1] == "Sabtu"): ?>
							<!-- Memberi warna di hari sabtu -->
							<td style="background-color: green;"><?php echo $hari[$indeksHari-1] ?></td>
						<?php elseif($i == 29): ?>
							<!-- Memberi warna pada hari libur maulid nabi jatuh tanggal 29 -->
							<td style="background-color: red"><?php echo $hari[$indeksHari-1] ?></td>
						<?php else: ?>
							<td><?php echo $hari[$indeksHari-1] ?></td>
						<?php endif; ?>
				<?php endif; ?>
			</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</body>
</html>