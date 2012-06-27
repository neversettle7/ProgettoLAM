<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Registrati</title>
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
						<form id="register" method="post" action="registration-result.php">
							<h2>Registrati</h2>
							<p>
								Compila tutti i campi della pagina per registrarti.
							</p>
							<ul >
								<label class="description" for="nome">Nome</label>
								<span>
									<div>
										<input name="nome" class="element text" maxlength="255" size="30" value="Nome" onfocus="if (this.value=='Nome') this.value='';"/>
									</div> <label>Cognome</label> </span>
								<span>
									<div>
										<input name= "cognome" class="element text" maxlength="255" size="30" value="Cognome" onfocus="if (this.value=='Cognome') this.value='';"/>
									</div> <label></label> </span>
								<p class="guidelines" id="guide_1">
									<small>Inserire il proprio nome e cognome</small>
								</p>
								<label class="description" for="element_7">Indirizzo </label>
								<div>
									<input name="indirizzo" class="element text large" value="Indirizzo" size="50" type="text" onfocus="if (this.value=='Indirizzo') this.value='';">
								</div>
								<p class="guidelines" id="guide_7">
									<small>Questo indirizzo sarà usato per la spedizione e la fatturazione.</small>
								</p>
								<label class="description" for="element_5">Indirizzo email </label>
								<div>
									<input name="email" class="element text medium" type="text" maxlength="255" size="40" value="Email" onfocus="if (this.value=='Email') this.value='';"/>
								</div>
								<p class="guidelines" id="guide_5">
									<small>Inserire il proprio indirizzo email.</small>
								</p>
								<label class="description" for="element_6">Conferma indirizzo email </label>
								<div>
									<input name="confermaemail" class="element text medium" type="text" maxlength="255" size="40" value="Conferma email" onfocus="if (this.value=='Conferma email') this.value='';"/>
								</div>
								<p class="guidelines" id="guide_6">
									<small>Confermare il proprio indirizzo email.</small>
								</p>
								<label class="description" for="element_2">Username </label>
								<div>
									<input name="username" class="element text medium" type="text" maxlength="255" value=""/>
								</div>
								<p class="guidelines" id="guide_2">
									<small>Scegliere uno username identificativo. Sarà poi utilizzato per il login.</small>
								</p>
								<label class="description" for="element_3">Password </label>
								<div>
									<input name="password" class="element text medium" type="password" maxlength="255" value=""/>
								</div>
								<p class="guidelines" id="guide_3">
									<small>Inserire la propria password.</small>
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