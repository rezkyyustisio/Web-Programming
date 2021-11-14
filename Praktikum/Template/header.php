<header>
	<div class="brand">
		<div>
			<img width="70" src="img/logopolnep.png" alt="logo polnep" style="float: left;">
			<p style="float: left; margin-left: 20px; margin-top: 20px;">
				Nomor Hp: 0831 5141 1153 <br>
				Facebook: Rezky Yustisio
			</p>
		</div>
	</div>
	<nav>
		<div>
			<h1>Halaman <?php if(isset($_GET['menu'])){ echo ucwords($_GET['menu']); } else { echo 'Dashboard'; } ?></h1>
			<a href="logout.php"><img width="50" src="img/arrow.png" alt="keluar"></a>
		</div>
	</nav>
</header>