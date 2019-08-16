<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-cerulean.min.css">
	<title>Admin</title>
</head>
<body>
	<marquee behavior="" direction=""><u><mark style="font-size: 28px">Bienvenue Dans Votre Espace d' Administrateur!!!</mark></u></marquee>
	<div class="container spacer col-md-9 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">Liste des Utilisateurs</div>
			<div class="panel-body">
			  <form class="nav navbar-form" method="POST" action="../../controller/adminController.php">
			  	<input type="text" name="nomuser" class="form-control sm" placeholder="Entrez le nom de l'utilisateur">
			  	<button type="submit" name="ok" class="btn btn-info btn sm">RECHERCHER</button>
			  </form>
				<table class="table table-bordered table-striped ">
					<tr>
						<th>ID utilisateur</th>
						<th>Nom utilisateur</th>
						<th>Prenom utilisateur</th>
						<th>Email utilisateur</th>
						<th>Telephone utilisateur</th>
						<th>Login utilisateur</th>
						<th>Mot de passe utilisateur</th>
					</tr>
					
					<?php
      
		//Connexion a la base de donnee
                      $host = 'localhost';
	            	  $user = 'root';
		              $pwd = '';
		              $dbname = 'projet1l3';
		              $connect = mysqli_connect($host, $user, $pwd, $dbname);
					  $users =mysqli_query($connect,"SELECT * FROM users") ;
						while ($t = mysqli_fetch_row($users)) {
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
				<form method="POST" action="../../controller/adminController.php">
				<a href="ajoutuser.php" class="btn btn-info">Ajouter</a>
				<a href="../index.php" class="btn btn-warning">Retour</a>
				<div class="form-group row">
						<input type="number" name="id" placeholder="Mettez l'ID de l'inscrit à Supprimer" class="form-control">
				</div>
				<button type="submit" name="delete" class="btn btn-danger">Supprimer</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>