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
	<link rel="stylesheet" type="text/css" href="css/stylepayment.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
	<body>
		<header class="col-lg-12">
		<div class="container">
			<nav>
				<li><a href="profilAsso.php">Retour</a></li>
			</nav>
		</div>
	</header>
		<div class="demo">
		<form class="payment-card">
			<div class="bank-card">
				<div class="bank-card__side bank-card__side_front">
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_holder">
							<span class="bank-card__hint">Holder of card</span>
							<input type="text" class="bank-card__field" placeholder="Nom du propriétaire" pattern="[A-Za-z, ]{2,}" name="holder-card" required>
						</label>
					</div>
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_number">
							<span class="bank-card__hint">Number of card</span>
							<input type="text" class="bank-card__field" placeholder="Numéro" pattern="[0-9]{16}" name="number-card" required>
						</label>
					</div>
					<div class="bank-card__inner">
						<span class="bank-card__caption">Date d'expiration</span>
					</div>
					<div class="bank-card__inner bank-card__footer">
						<label class="bank-card__label bank-card__month">
							<span class="bank-card__hint">Month</span>
							<input type="text" class="bank-card__field" placeholder="MM" maxlength="2" pattern="[0-9]{2}" name="mm-card" required>
						</label>
						<span class="bank-card__separator">/</span>
						<label class="bank-card__label bank-card__year">
							<span class="bank-card__hint">Year</span>
							<input type="text" class="bank-card__field" placeholder="AA" maxlength="2" pattern="[0-9]{2}" name="year-card" required>
						</label>
					</div>
				</div>
				<div class="bank-card__side bank-card__side_back">
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__cvc">
							<span class="bank-card__hint">CVC</span>
							<input type="text" class="bank-card__field" placeholder="Secret" maxlength="3" pattern="[0-9]{3}" name="cvc-card" required>
						</label>
					</div>
				</div>
			</div>
			<div class="payment-card__footer">
				<a href="dams.php"><button class="payment-card__button">Valider</button></a>
			</div>
		</form>
	</div>
	</body>
</html>