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
	<section id="suscription" class="col-lg-12">
		<form method="post" onsubmit="return verifSuscription(this);">
              	<input name="nomContact" type="text" id="nomContact" placeholder="Nom du Contact" onchange="allUpperCase();" class="col-lg-4"></input><br />
              	<input name="prenomContact" type="text" id="prenomContact" placeholder="Prénom du Contact" onchange="firstUpperCase(this);" class="col-lg-4"></input><br />
              	<input name="email" type="text" id="email" placeholder="Email" onchange="isEmail(this);" class="col-lg-4"></input><br />
              	<input name="telephone" type="text" id="telephone" placeholder="Téléphone" onchange="isTelephone(this);" class="col-lg-4"></input><br />
              	<input name="age" type="text" id="age" placeholder="Age" onchange="" class="col-lg-4"></input><br />
              	<input name="identifiant" type="text" id="identifiant" placeholder="Identifiant" onchange="isIdentifiant(this);" class="col-lg-4"></input><br />
              	<input name="mdp" type="text" id="mdp" placeholder="Mot de passe" class="col-lg-4"></input><br />
              	<input name="remdp" type="text" id="remdp" placeholder="Valider votre mot de passe" class="col-lg-4"></input><br />
              </form>
               <div class="box">
              	<button type="submit" onclick="cookieEns();"><strong>VALIDER</strong></button>
              </div>
	</section>
	<footer class="col-lg-12">
		<p>Copyright | <a href="">Mentions légales</a></p>
	</footer>
	<script type="text/javascript" src="js/suscriptionAsso.js"></script>
</body>
</html>