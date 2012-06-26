<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="ISO-8859-1" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen, projection" />
	</head>

	<body>

		<div id="wrapper">

			<header id="header">
				<?
				include ("header.php");
				?>
			</header><!-- #header-->

			<section id="middle">
				<div id="navigation">
					<?
					include ("navigation.php");
					?>
				</div>

				<div id="container">
					<div id="content">
						<h1>Contattaci:</h1>
						<p></p>
						<img id="product-images" src="images/contatti.jpg" height="150" width="275" />
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						<p>
							Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
						</p>
						<p>
							Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
						</p>
						<p>
							Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
						</p>
						<p>
							Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
						</p>
						<p>
							Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
						</p>
						<p>
							Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
						</p>
						<p>
							Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
						</p>
						<p>
							Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
						</p>
					</div><!-- #content-->
				</div><!-- #container-->

				<aside id="sideLeft">
					<?
					include ("sidebar.php");
					?>
				</aside><!-- #sideLeft -->

			</section><!-- #middle-->

			<footer id="footer">
				<?
				include ("footer.php");
				?>
			</footer><!-- #footer -->

		</div><!-- #wrapper -->

	</body>
</html>