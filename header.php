<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>DOCUMENT</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<?php
			if(isset($_SESSION['id'])) {				
				echo "<form action='http://localhost/dist/Hotel/includes/logout.inc.php'>
					<button>LOG OUT</button>
					</form>" ;
			} else {
				echo "<form action='http://localhost/dist/Hotel/includes/login.inc.php' method='POST'>
					<input type='text' name='uid' placeholder='Username'>
					<input type='password' name='pwd' placeholder='Password'>
					<button type='submit'>LOGIN</button>
					</form>" ;
			}
			?>
			<li><a href="http://localhost/dist/Hotel/signup.php">SIGN UP</a></li>
		<ul>
	</nav>
</header>

</body>
</html>