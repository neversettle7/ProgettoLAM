<?php

session_start();

include_once ('../include/functions.php');

adminlogin($_SESSION['admin']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Cancella utente</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	</head>
	<body id="main_body" >
		<div id="wrapper">
			<div id="header">
				<?
				include ("header.php");
				?>
			</div>
			<!--<section id="middle">
			<div id="container">!-->
			<div id="content">
				<?php
				
				include_once ("../include/functions.php");
				
				$id = $_GET['id'];
				
				if($id){
				echo "<p>Utente cancellato.</p>";
				
				$query = ("DELETE FROM utenti WHERE id='$id'");
				// Check - print_r($query);
				$connection = connect($query);
				}
				else echo "Operazione non valida, l'id dell'utente non è stato specificato.";
				?>
			</div>
			<!--</div>!-->

			<aside id="leftcolumn">
				<?
				include ("admin-sidebar.php");
				?>
			</aside><!-- #sideLeft -->

			<!--</section>!-->
			<div id="footer">
				<?
				include ("footer.php");
				?>
			</div>
		</div>
	</body>
</html>