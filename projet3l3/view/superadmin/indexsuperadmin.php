<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-cerulean.min.css">
	<title>superadmin</title>
</head>
<body>
	<marquee behavior="" direction=""><u><mark style="font-size: 28px">Bienvenue Dans Votre Espace de Super Administrateur!!!</mark></u></marquee>
	<div class="container spacer col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Liste des Inscrits <a href="../index.php" class="btn btn-warning">Retour</a></div>
			<div class="panel-body">
			  <form class="nav navbar-form" method="POST" action="../../controller/superadminController.php">
			  	<input type="text" name="nominscrit" class="form-control sm" placeholder="Entrez le nom de l'inscrit">
			  	<button type="submit" name="ok" class="btn btn-info btn sm">RECHERCHER</button>
				

			  </form>
				<table class="table table-bordered table-striped">
					<tr>
						<th>ID inscrit</th>
						<th>Nom inscrit</th>
						<th>Prenom inscrit</th>
						<th>Email inscrit</th>
						<th>Telephone inscrit</th>
						<th>Login inscrit</th>
						<th>Mot de passe inscrit</th>
						<th>Profil</th>
					</tr>
					
					<?php
      
		//Connexion a la base de donnee
                      $host = 'localhost';
	            	  $user = 'root';
		              $pwd = '';
		              $dbname = 'projet1l3';
		              $connect = mysqli_connect($host, $user, $pwd, $dbname);
					  $inscrits =mysqli_query($connect,"SELECT * FROM inscrits") ;
						while ($t = mysqli_fetch_row($inscrits)) {
							echo "<tr>
										<td>$t[0]</td>
										<td>$t[1]</td>
										<td>$t[2]</td>
										<td>$t[3]</td>
										<td>$t[4]</td>
										<td>$t[5]</td>
										<td>$t[6]</td>
										<td>$t[7]</td>
								 </tr> ";
						}
					?> 
					   
					
				</table>
				<form method="POST" action="../../controller/indexsuperadminController.php">
				<div class="form-group row">
						<input type="number" name="id" placeholder="Mettez l'ID de l'inscrit à valider" class="form-control">
				</div>
				<button type="submit" name="admin" class="btn btn-secondary">Administrateur</button>
				<button type="submit" name="user" class="btn btn-warning">Utilisateur</button>
				</form>
				<a href="listusers.php"><u>Listes des utilisateurs</u></a><br>
                <a href="listadmins.php"><u>Listes des administrateurs</u></a>

			</div>
		</div>
	</div>
</body>
</html>