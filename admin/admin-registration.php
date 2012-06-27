<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Registrazione amministratore</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
		<script type="text/javascript" src="view.js"></script>
	</head>
	<body id="main_body" >
		<div id="wrapper">
			<div id="header">
				<?
				include ("header.php");
				?>
			</div>
			<!--<section id="middle">-->
			<div id="container">
				<div id="content">

					<form id="register" method="post" action="admin-registration-result.php">
						<h2>Inserisci un admin</h2>
						<p>
							Compila tutti i campi della pagina inserire un admin.
						</p>
						<ul >
							<label class="description" for="nome">Nome</label>
							<span>
								<div>
									<input name="nome" class="element text" maxlength="255" size="30" value="<? echo $nome ?>"/>
								</div> <label>Cognome</label> </span>
							<span>
								<div>
									<input name= "cognome" class="element text" maxlength="255" size="30" value="<? echo $cognome ?>"/>
								</div> <label></label> </span>
							<p class="guidelines" id="guide_1">
								<small>Inserire nome e cognome</small>
							</p>
							<label class="description" for="element_7">Indirizzo </label>
							<div>
								<input name="indirizzo" class="element text large" size="50" type="text" value="<? echo $indirizzo ?>">
							</div>
							<p class="guidelines" id="guide_7">
								<small>Inserisci un indirizzo.</small>
							</p>
							<label class="description" for="element_5">Indirizzo email </label>
							<div>
								<input name="email" class="element text medium" type="text" maxlength="255" size="40" value="<? echo $email ?>"/>
							</div>
							<p class="guidelines" id="guide_5">
								<small>Inserire l'indirizzo email.</small>
							</p>
							<label class="description" for="element_2">Username </label>
							<div>
								<input name="username" class="element text medium" type="text" maxlength="255" value="<? echo $username ?>"/>
							</div>
							<p class="guidelines" id="guide_2">
								<small>Scegliere uno username identificativo. Sar� poi utilizzato per il login.</small>
							</p>
							<label class="description" for="element_3">Password </label>
							<div>
								<input name="password" class="element text medium" type="password" maxlength="255" value=""/>
							</div>
							<p class="guidelines" id="guide_3">
								<small>Inserire la password.</small>
							</p>
							<label class="description" for="element_4">Conferma password </label>
							<div>
								<input name="confermapassword" class="element text medium" type="password" maxlength="255" value=""/>
							</div>
							<p class="guidelines" id="guide_4">
								<small>Confermare la password precedentemente inserita.</small>
							</p>
							<input type="hidden" name="form_id" value="register" />
							<input id="saveForm" class="button_text" type="submit" name="submit" value="Invia" />
						</ul>
					</form>

				</div>
				

				<aside id="leftcolumn">
					<?
					include ("admin-sidebar.php");
					?>
				</aside><!-- #sideLeft -->
				<div style="clear: both">
					&nbsp;
				</div>
			</div>
			<!--</section>!-->
			<div id="footer">
				<?
				include ("footer.php");
				?>
			</div>
		</div>
	</body>
</html>