<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Logout</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	</head>
	<body id="main_body" >
		<div id="wrapper">
			<div id="header">
				<?
				include ("header.php");
				?>
			</div>
			<section id="middle">
				<div id="navigation">
					<?
					include ("navigation.php");
					?>
				</div>
				<div id="container">
					<div id="content">
						<?php
						session_start();
						session_destroy();
						session_start();
						?>

						<p>
							Logout effettuato con successo.
						</p>
						<p></p>
						<p>
							Torna presto a trovarci!
						</p>
						<p></p>
						<p>
							<a href="index.php">Home</a>
						</p>

					</div>
				</div>

				<aside id="sideLeft">
					<?
					include ("sidebar.php");
					?>
				</aside><!-- #sideLeft -->

			</section>
			<div id="footer">
				<?
				include ("footer.php");
				?>
			</div>
		</div>
	</body>
</html>