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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
	<body>
		<header class="col-lg-12">
		<div class="container">
			<nav>
				<li><a href="profilEns.php">PROFIL</a></li>
				<li><a href="offer.php">OFFRES</a></li>
				<li><a href="../index.php">DECONNEXION</a></li>
			</nav>
		</div>
	</header>
	<section id="logo" class="col-lg-12">
		<div class="container">
			<img src="img/logo/logo.png" class="img-responsive">
		</div>
	</section>
	<section id="offer" class="col-lg-12">
		<div class="box">
			<a href="gestionOffers.php"><button><strong>GÉRER CES OFFRES</strong></button></a>
		</div>
		<h2 class="col-lg-5">DÉPOSER UNE OFFRE</h2>
		<form method="post">
			<p>Date de début de l'offre <input name="DateDebutOffre" type="date" id="DateDebutOffre" class="top col-lg-4"></input></p>
			<p>Date de fin de l'offre <input name="DateFinOffre" type="date" id="DateFinOffre" class="col-lg-4"></input></p>
			<p>libeleOffre<input type="text" name="libeleOffre" class="col-lg-4"></input></p>
			<p>nombreProduit<input type="" name="nombreProduit" class="col-lg-4"></input></p>
			<p>prixOffre<input type="" name="prixOffre" class="col-lg-4"></input></p>
			<p>titreOffre<input type="text" name="titreOffre" class="col-lg-4"></input></p>
			<div class="box">
              	<button id="envoyer" name="envoyer" type="submit"><strong>ENVOYER</strong></button>
            </div>
        </form>

          <?php      
              if (isset($_POST['envoyer'])){
					$uneOffre = new Controleur("localhost","gaspillage","root","");
					$uneOffre->setTable("offre");
					$tabOffre = array (
						"email"=>$_POST['email'],
						"nomAsso"=>$_POST['assoName'],
						"siretAsso"=>$_POST['assoNumber'],
						"telephone"=>$_POST['phone']
					);
					$uneOffre->insert ($tabAsso);

					?>

	</section>
	<footer class="col-lg-12">
		<p>Copyright | <a href="">Mentions légales</a></p>
	</footer>
	</body>
</html>