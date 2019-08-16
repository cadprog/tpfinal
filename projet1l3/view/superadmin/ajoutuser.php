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
			<div class="panel-heading">Formulaire d'ajout d'utilisateurs</div>
			<div class="panel-body">
				<form method="POST" action="../../controller/superadminController.php">

					<div class="form-group row ">
						<div class="col-md-3">
						<label class="control-label">Nom</label>
						</div>
						<div class="col-md-3">
						<input type="text" name="nomuser" class="form-control">
                        </div>
					</div>
					<div class="form-group row">
						<label class="control-label">Prenom</label>
						<input type="text" name="prenomuser" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Email</label>
						<input type="text" name="emailuser" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Telephone</label>
						<input type="text" name="telephoneuser" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Login</label>
						<input type="text" name="loginuser" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Mot de passe</label>
						<input type="text" name="pwduser" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Etat</label>
						<input type="number" name="etat" class="form-control" value="0">
					</div>
					<button type="submit" name="valider" class="btn btn-success">Valider</button>
					<a href="listusers.php" class="btn btn-warning">Liste</a>
				</form>
				<a href="indexsuperadmin.php">Retour</a>
			</div>
		</div>
	</div>
</body>
</html>