<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="ISO-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	</head>

	<body>
		<div>Pannello di controllo</div>
		<?php
			if ($_SESSION['login'] == 1) {
				echo 'Benvenuto ' . $_SESSION['username'];
				echo ' | fai <a href="logout.php">logout</a>';
			} else {
				echo 'Benvenuto! Fai <a href="login.php">login</a> o <a href="register.php">registrati</a>.';
			}
		?>

	</body>
</html>