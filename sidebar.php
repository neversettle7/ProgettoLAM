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
		<div id="sidemenu">
			<ul>
				<li>
					<a href="index.php" title="Home">Home</a>
				</li>
				<li>
					<a href="mission.php" title="Chi siamo">Chi siamo</a>
				</li>
				<li>
					<a href="services.php" title="Servizi">Servizi</a>
				</li>
				<li>
					<a href="catalog.php" title="Catalogo">Catalogo</a>
				</li>
				<li>
					<a href="contact.php" title="Contattaci">Contattaci</a>
				</li>
				<?php
					if ($_SESSION['login'] == 1) {
						echo '<li> <a href="account.php" title="Modifica account">Modifica il tuo account</a></li>';
					}
				?>
				<?php
					if ($_SESSION['admin'] == 1) {
						echo '<li> <a href="admin/admin.php" title="Pannello di controllo">Pannello di controllo admin</a></li>';
					}
				?>
			</ul>
		</div>
	</body>
</html>