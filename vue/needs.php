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
					<li><a href="profilAsso.php">PROFIL</a></li>
					<li><a href="needs.php">DEMANDES EN COURS</a></li>
					<li><a href="../index.php">DECONNEXION</a></li>
				</nav>
			</div>
		</header>
	<section id="logo" class="col-lg-12">
		<div class="container">
			<img src="img/logo/logo.png" class="img-responsive">
		</div>
	</section>

	<table class="table" border=1>
		<thead class="thead-dark">	
			<tr>
				<th scope="col">Date de Debut</th>
				<th scope="col">Date de fin</th>
				<th scope="col">id Offre</th>
				<th scope="col">libele Offre</th>
				<th scope="col">Nombre Produit</th>
				<th scope="col">Prix Offre</th>
				<th scope="col">Echéance</th>
				<th scope="col">Action</th>
			</tr>
		</thead>	
		
		<div class="progress">
		<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
		</div>



	<?php 


					$uneOffre = new Controleur("localhost","gaspillage","root","");
					$uneOffre->setTable("offre");
					$resultats = $uneOffre->selectAll();

					foreach($resultats as $unResultat){
						$pourcent = rand(0,100);
												

						echo "
						<tr> 
							<td>".$unResultat['dateDebut']."</td>
							<td>".$unResultat['dateFin']."</td>
							<td>".$unResultat['idOffre']."</td>
							<td>".$unResultat['libeleOffre']."</td>
							<td>".$unResultat['nombreProduit']."</td>
							<td>".$unResultat['prixOffre']."€</td>
							<td><div class='progress'>
							<div class='progress-bar' role='progressbar' style='width: ".$pourcent."%"."; aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>".$pourcent."%"."</div>
							</div></td>
							<td>

							<a href='deleteNeedsPopUp.php'><img src='img\supprimer.jpg' name='supprimer' id='supprimer' alt='supprimer'/></a>
							<a href='updateNeedsPopUp.php'><img src='img\modifier.jpg' name='modifier' id='modifier' alt='modifier'/></a>
							</td>
						</tr>";

						

				
					}
					if (isset($_POST['valider'])) {
						$uneOffre->suppression($resultats);
						//echo "L'offre a bien été ajouté à vos achats";
					}
						
		

	 ?>

	</table>



	<footer class="col-lg-12">
		<p>Copyright | <a href="">Mentions légales</a></p>
	</footer>
	</body>
</html>