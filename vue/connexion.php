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
	<section id="connexion" class="col-lg-12"">
		<form method="post" action="connexion.php">
              	<input name="identifiant" type="text" id="identifiant" placeholder="Identifiant" class="col-lg-4"></input><br />
              	<input name="password" type="password" id="password" placeholder="Mot de passe" class="col-lg-4"></input><br />
       
              	<div class="box">
            	<button type="submit" name="valider" value="valider"><strong>VALIDER</strong></button>

        </form>      	

        <?php
        		include 'C:\wamp64\www\Gaspillage\config.php';
        		$unControleur->setTable("contactasso");
				$lesTypes = $unControleur->selectAll();

				if (isset($_POST['valider']))
				{
					$unControleur->setTable("contactasso");
					$login = $_POST['identifiant'];
					$mdp = $_POST['password'];
					$unControleur->connexionUser($login,$mdp);
				}
				

        ?>
              

              </div>
	</section>
	<footer class="col-lg-12">
		<p>Copyright | <a href="">Mentions légales</a></p>
	</footer>
</body>
</html>