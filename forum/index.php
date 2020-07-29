<?php
	include ('layout_manager.php');
	include ('content_function.php');
?>
<html>
<head><title>Discussion Forum</title></head>
<link href="/forum/styles/main.css" type="text/css" rel="stylesheet" />
<body>
	<div class="pane">
		<div class="header"><h1><a href="/forum">Discussion Forum</a></h1></div>
		<div class="loginpane">
			<?php
				session_start();
				if (isset($_SESSION['username'])) {
					logout();
				} else {
					if (isset($_GET['status'])) {
						if ($_GET['status'] == 'reg_success') {
							echo "<h1 style='color: green;'>New user registered successfully!!</h1>";
						} else if ($_GET['status'] == 'login_fail') {
							echo "<h1 style='color: red;'>Login Failed. Please enter valid username or password!!</h1>";
						}
					}
					loginform();
				}
			?>
		</div>
		<div class="forumdesc">
			
		</div>
		<div class="content">
			<?php dispcategories(); ?>
		</div>
	</div>
</body>
</html>