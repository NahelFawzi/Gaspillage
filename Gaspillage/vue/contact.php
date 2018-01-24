<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recyclage</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<header class="col-lg-12">
		<div class="container">
			<nav>
				<li><a href="../index.php">ACCUEIL</a></li>
				<li><a href="association.php">ESPACE ASSOCIATION</a></li>
				<li><a href="enseigne.php">ESPACE ENSEIGNE</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</nav>
		</div>
	</header>
	<section id="logo" class="col-lg-12">
		<div class="container">
			<img src="img/logo/logo.png" class="img-responsive">
		</div>
	</section>
	<section id="contact" class="col-lg-12">
		<div class="container">
        	<h2 class="col-lg-5">CONTACTEZ NOUS !</h2>
              <p>Un retour à nous faire parvenir ? n'hésitez pas !</p>
              <form method="post">
              	<input name="Identifiant" type="text" id="identifiant" placeholder="Identifiant" class="col-lg-4"></input><br />
              	<input name="Password" type="text" id="password" placeholder="Mot de passe" class="col-lg-4"></input><br />
              	<textarea class="col-lg-4" placeholder="Message..."></textarea><br />
              </form>
              <div class="box">
              	<button type="submit"><strong>ENVOYER</strong></button>
              </div>
        </div>
      </section>
	<footer class="col-lg-12">
		<p>Copyright | <a href="">Mentions légales</a></p>
	</footer>
</body>
</html>