<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-cerulean.min.css">
	<title>superadmin</title>
</head>
<body>
		<marquee behavior="" direction=""><u><mark style="font-size: 28px">Bienvenue Dans Votre Espace de Super Administrateur!!!</mark></u></marquee>
	<div class="container spacer col-md-9 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">Liste des Administrateurs</div>
			<div class="panel-body">
			  <form class="nav navbar-form" method="POST" action="../../controller/superadminController.php">
			  	<input type="text" name="nominscrit" class="form-control sm" placeholder="Entrez le nom de l'administrateur">
			  	<button type="submit" name="ok" class="btn btn-info btn sm">RECHERCHER</button>
			  </form>
				<table class="table table-bordered table-striped ">
					<tr>
						<th>ID administrateur</th>
						<th>Nom administrateur</th>
						<th>Prenom administrateur</th>
						<th>Email administrateur</th>
						<th>Telephone administrateur</th>
						<th>Login administrateur</th>
						<th>Mot de passe administrateur</th>
					</tr>
					
					<?php
      
		//Connexion a la base de donnee
                      $host = 'localhost';
	            	  $user = 'root';
		              $pwd = '';
		              $dbname = 'projet1l3';
		              $connect = mysqli_connect($host, $user, $pwd, $dbname);
					  $admins =mysqli_query($connect,"SELECT * FROM admins") ;
						while ($t = mysqli_fetch_row($admins)) {
							echo "<tr>
										<td>$t[0]</td>
										<td>$t[1]</td>
										<td>$t[2]</td>
										<td>$t[3]</td>
										<td>$t[4]</td>
										<td>$t[5]</td>
										<td>$t[6]</td>
								 </tr> ";
						}
					?> 
					   
					
				</table>
				<form method="POST" action="../../controller/superadminController.php">
				<a href="ajoutadmin.php" class="btn btn-info">Ajouter</a>
				<a href="indexsuperadmin.php" class="btn btn-warning">Retour</a>
				<div class="form-group row">
						<input type="number" name="id" placeholder="Mettez l'ID de l'inscrit à Supprimer" class="form-control">
				</div>
				<button type="submit" name="supprimer" class="btn btn-danger">Supprimer</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>