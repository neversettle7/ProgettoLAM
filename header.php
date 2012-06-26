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
	<?php session_start(); ?>
	<body>
		<img src='include/ecomLOGO.png' align="top-left">
		<?php
		if ($_SESSION['login'] == 1) {
			echo 'Benvenuto/a <a href="account.php">' . $_SESSION['username'] . '</a>';
			echo ' | fai <a href="logout.php">logout</a>';
		} else {
			echo 'Benvenuto/a! Fai <a href="login.php">login</a> o <a href="register.php">registrati</a>.';
		}
		?>
	</body>
</html>