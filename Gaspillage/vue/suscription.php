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
		<form method="post">
				<input name="AssoName" type="text" id="assoname" placeholder="Nom de l'Association" class="col-lg-4"></input><br />
				<input name="Number" type="text" id="number" placeholder="Le numéro d'association" class="col-lg-4"></input><br />
              	<input name="Surname" type="text" id="surname" placeholder="Nom du Contact" class="col-lg-4"></input><br />
              	<input name="Name" type="text" id="name" placeholder="Prénom du Contact" class="col-lg-4"></input><br />
              	<input name="Email" type="text" id="email" placeholder="Email" class="col-lg-4"></input><br />
              	<input name="Phone" type="text" id="phone" placeholder="Téléphone" class="col-lg-4"></input><br />
              	<input name="Age" type="text" id="age" placeholder="Age" class="col-lg-4"></input><br />
              	<input name="Function" type="text" id="function" placeholder="Fonction au sein de l'association" class="col-lg-4"></input><br />
              	<input name="Identifiant" type="text" id="identifiant" placeholder="Identifiant" class="col-lg-4"></input><br />
              	<input name="Password" type="text" id="password" placeholder="Mot de passe" class="col-lg-4"></input><br />
              	<input name="Repassword" type="text" id="repassword" placeholder="Retapper votre mot de passe" class="col-lg-4"></input><br />
              </form>
               <div class="box">
              	<button type="submit"><strong>ENVOYER</strong></button>
              </div>
	</section>
	<footer class="col-lg-12">
		<p>Copyright | <a href="">Mentions légales</a></p>
	</footer>
</body>
</html>