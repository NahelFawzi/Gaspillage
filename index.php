
<?php
session_start();
include ("C:\wamp64\www\Gaspillage\controller\controleur.php");
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
	<link rel="stylesheet" type="text/css" href="vue/css/style.css">
	<link rel="stylesheet" type="text/css" href="vue/css/bootstrap.min.css">
</head>
<body>
	<header class="col-lg-12">
		<div class="container">
			<nav>
				<li><a href="index.php">ACCUEIL</a></li>
				<li><a href="vue/association.php">ESPACE ASSOCIATION</a></li>
				<li><a href="vue/enseigne.php">ESPACE ENSEIGNE</a></li>
				<li><a href="vue/contact.php">CONTACT</a></li>
			</nav>
		</div>
	</header>
	<section id="logo" class="col-lg-12">
		<div class="container">
			<img src="vue/img/logo/logo.png" class="img-responsive">
		</div>
	</section>
	<section id="how" class="col-lg-12">
		<div class="container">
			<h2 class="col-lg-5">COMMENT CA MARCHE ?</h2>
			<h3 class="left col-lg-12">Etape 1</h3>
			<p class="left col-lg-12">Une enseigne met en vente sur notre site une offre de produit qu'elle n'expose plus en magasin. <br />Cette offre est comporté de plusieurs produits et chacun peut être pris individuellement.</p>
			<h3 class="right col-lg-12">Etape 2</h3>
			<p class="right col-lg-12">Une association fais une demande sur les produits qu'elle désire récupérer et résèrve</p>
			<h3 class="left col-lg-12">Etape 3</h3>
			<p class="left col-lg-12">Vous vous métez d'accord sur le voyage et le conditionnement des produits et HOP ! C'est bon</p>
			<p class="col-lg-12">Seulement les enseignes et association inscrites dans notre base peuvent poser et passer une commande sur notre site !</p>
		</div>
	</section>
	<footer class="col-lg-12">
		<p>Copyright | <a href="">Mentions légales</a></p>
	</footer>
</body>
</html>

