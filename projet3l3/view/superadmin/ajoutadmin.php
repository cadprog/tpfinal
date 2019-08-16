<!DOCTYPE html>
<html>
<head>
	<title>superadmin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-cerulean.min.css">
</head>
<body>
		<marquee behavior="" direction=""><u><mark style="font-size: 28px">Bienvenue Dans Votre Espace de Super Administrateur!!!</mark></u></marquee>
	<div class="container spacer col-lg-4 col-md-4 col-xs-4 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Formulaire d'ajout d'administrateurs</div>
			<div class="panel-body">
				<form method="POST" action="../../controller/superadminController.php">

					<div class="form-group row ">
						<div class="col-md-3">
						<label class="control-label">Nom</label>
						</div>
						<div class="col-md-3">
						<input type="text" name="nomadmin" class="form-control">
                        </div>
					</div>
					<div class="form-group row">
						<label class="control-label">Prenom</label>
						<input type="text" name="prenomadmin" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Email</label>
						<input type="text" name="emailadmin" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Telephone</label>
						<input type="text" name="telephoneadmin" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Login</label>
						<input type="text" name="loginadmin" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Mot de passe</label>
						<input type="text" name="pwdadmin" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Etat</label>
						<input type="number" name="etat" class="form-control" value="1">
					</div>
					<button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
					<a href="listadmins.php" class="btn btn-danger">Retour</a>
				</form>
				<a href="listadmins.php"><u>Listes des administrateurs</u></a><br>
			</div>
		</div>
	</div>
</body>
</html>