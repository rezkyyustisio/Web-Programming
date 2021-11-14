<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Rezky Yustisio Hadi Pratama
		VB @2020
	</title>
	<link rel="stylesheet" href="css/page-login.css">
</head>
<body>
	<div id="card">
		<div id="card-content">
			<div id="card-title">
				<h2>LOGIN APP</h2>
				<div class="underline-title"></div>
			</div>

			<form method="POST" action="auth/proses-login.php" class="form">
				<label for="user-username" style="padding-top: 13px; font-family: 'Arial'">&nbsp;Username</label>
				<input type="username" name="username" id="user-username" class="form-content" autocomplete="off" required>
				<div class="form-border"></div>

				<label for="user-password" style="padding-top: 13px; font-family: 'Arial'">&nbsp;Password</label>
				<input type="password" name="password" id="user-password" class="form-content" required>
				<div class="form-border"></div>

				<a href="#"><legend id="forgot-pass">Lupa password ?</legend></a>

				<input type="submit" id="submit-btn" name="submit" value="LOGIN">
				<a href="#" id="signup">Belum punya akun ?</a>
			</form>
		</div>
	</div>
</body>
</html>

<!-- 3201816021 / Rezky Yustisio Hadi Pratama -->