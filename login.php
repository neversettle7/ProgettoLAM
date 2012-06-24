<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Registrati</title>
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
			<section id="middle">
				<div id="navigation">
					<?
					include ("navigation.php");
					?>
				</div>
				<div id="container">
					<div id="content">
						<form id="login" method="post" action="login-result.php">
							<h2>Login</h2>
							<p>
								Inserisci i tuoi dati per effettuare il login.
							</p>
							<ul >
								<label class="description" for="username">Username</label>
								<span>
									<div>
										<input name="username" class="element text" maxlength="255" size="30" value="Nome" onfocus="if (this.value=='Nome') this.value='';"/>
									</div> <label></label> </span>
								<p class="guidelines" id="guide_1">
									<small>Inserisci il tuo username</small>
								</p>
								<label class="description" for="password">Password </label>
								<div>
									<input name="password" class="element text medium" type="password" maxlength="255" />
								</div>
								<p class="guidelines" id="guide_3">
									<small>Inserisci la tua password.</small>
								</p>
								<input type="hidden" name="form_id" value="login" />
								<input id="saveForm" class="button_text" type="submit" name="submit" value="Login" />
							</ul>
						</form>
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