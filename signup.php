<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | St. Vincent Institute of Technology</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
    include_once 'navbar.php';
?>


	<section class="signup-form">
		<h2>Sign Up</h2>
		<div class="signup-form-form">
			<form action="signup.inc.php" method="post">
				<input type="text" name="name" placeholder="Full Name">
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwdrepeat" placeholder="Repeat Password">
				<button type="submit" name="submit">Sign Up</button>
			</form>
		</div>
	</section>
		
		
				




<?php
	include_once 'footer.php';
?>
<script src="navbar-active.js"></script>
</body>
</html>