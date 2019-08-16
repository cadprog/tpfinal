<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-cerulean.min.css">
</head>
<body>
	
	<div class="container spacer col-lg-4 col-md-4 col-xs-4 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Formulaire d'inscription</div>
			<div class="panel-body">
				<form method="POST" action="../../controller/inscriptionController.php">

					<div class="form-group row ">
						<div class="col-md-3">
						<label class="control-label">Nom</label>
						</div>
						<div class="col-md-3">
						<input type="text" name="nominscrit" class="form-control">
                        </div>
					</div>
					<div class="form-group row">
						<label class="control-label">Prenom</label>
						<input type="text" name="prenominscrit" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Email</label>
						<input type="text" name="emailinscrit" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Telephone</label>
						<input type="text" name="telephoneinscrit" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Login</label>
						<input type="text" name="logininscrit" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Mot de passe</label>
						<input type="text" name="pwdinscrit" class="form-control">
					</div>
					<div class="form-group row">
						<label class="control-label">Etat</label>
						<input type="number" name="etat" class="form-control" value="0">
					</div>
					<button type="submit" name="valider" class="btn btn-success">Valider</button>
					<a href="../index.php" class="btn btn-danger">Retour</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>