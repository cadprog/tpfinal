
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min.css">
</head>
<body>
<marquee behavior="" direction=""><u><mark style="font-size: 28px">Veuillez vous connecter!!!</mark></u></marquee>
<div class="container col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Formulaire de Connexion</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
	<?php 
		include '../model/formconnexion.php';

		$form = new Formulaire();
	?>
	<form  method ="POST" action="../controller/connexionController.php">
		<?= $form->input("Login");?>
		<?= $form->password("Motdepasse");?>
		<?= $form->submit("Connexion");?>
		<?= $form->reset("Inscription");?>
	</form>
	</div>
				<div class="col-md-4"></div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>