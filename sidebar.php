<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="css/sidebarmenu.css" type="text/css" media="screen, projection" />
	</head>

	<body>
		<div id="menu">
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
					if ($_SESSION['admin'] == 1) {
						echo '<li> <a href="/backend.php" title="Backend">Backend</a></li>';
					}
				?>
			</ul>
		</div>
	</body>
</html>