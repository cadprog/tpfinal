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
				   <form method="POST" action="../controller/connexionController.php">
				    	<div class="form-group">
						 <label>Login</label>
						 <input type="text" name="login" class="form-control">
					   </div>
					   <div class="form-group">
						<label>Mot de passe</label>
						<input type="text" name="motdepasse" class="form-control">
					  </div>
					<button type="submit" name="connexion" class="btn btn-info">Connexion</button>
					<a href="index.php" class="btn btn-warning">Retour</a>
				  </form>
				</div>
				<div class="col-md-4"></div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>