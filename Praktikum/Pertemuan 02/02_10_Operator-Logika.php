<?php 
$x = true;
$y = true;

echo '$x = true dan $y = true <br><br>'
?>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>$x</th><th><?php var_dump($x); ?></th>
	</tr>
	<tr>
		<th>$y</th><th><?php var_dump($y); ?></th>
	</tr>
	<tr>
		<th>!$x</th><td><?php var_dump(!$x); ?></td>
	</tr>
	<tr>
		<th>!$y</th><td><?php var_dump(!$y); ?></td>
	</tr>
	<tr>
		<th>$x and $y</th><td><?php var_dump($x and $y) ?></td>
	</tr>
	<tr>
		<th>$x or $y</th><td><?php var_dump($x or $y) ?></td>
	</tr>
	<tr>
		<th>$x xor $y</th><td><?php var_dump($x xor $y) ?></td>
	</tr>
</table>


<?php 
$x = false;
$y = true;
echo "<br><br>";
echo '$x = false dan $y = false <br><br>'
?>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>$x</th><th><?php var_dump($x); ?></th>
	</tr>
	<tr>
		<th>$y</th><th><?php var_dump($y); ?></th>
	</tr>
	<tr>
		<th>!$x</th><td><?php var_dump(!$x); ?></td>
	</tr>
	<tr>
		<th>!$y</th><td><?php var_dump(!$y); ?></td>
	</tr>
	<tr>
		<th>$x and $y</th><td><?php var_dump($x and $y) ?></td>
	</tr>
	<tr>
		<th>$x or $y</th><td><?php var_dump($x or $y) ?></td>
	</tr>
	<tr>
		<th>$x xor $y</th><td><?php var_dump($x xor $y) ?></td>
	</tr>
</table>