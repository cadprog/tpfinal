<!DOCTYPE html>
<html>
<head>
	<title>listes pubs</title>
</head>

<?php
include "../model/database.php";
 $db = new Database();
$allpubs = $db->getAllpub();
$pubs= $db->trie($allpubs);
?>

<body>

	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min - Copie">

	<link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link rel="stylesheet" href="style/themify-icons.css">
    <link rel="stylesheet" href="style/flag-icon.min.css">
    <link rel="stylesheet" href="style/cs-skin-elastic.css">
    <br>
      <div class="col-lg-6">
                            <div class="card">
                               
                                <div class="card-body">    
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                          <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Accueil</a>
                                            </li>
                                           <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="inscription.php" role="tab" aria-controls="pills-profile" aria-selected="false">Inscription</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="connexion.php" role="tab" aria-controls="pills-profile" aria-selected="false">Connexion</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="connexion.php" role="tab" aria-controls="pills-contact" aria-selected="false">Publier</a>
                                            </li>
                                        </ul>

                                </div>
                            </div>
                        </div>
    
    <!--link rel="stylesheet" href="assets/scss/style.css"-->
<marquee behavior="" direction=""><u><mark style="font-size: 28px">Liste des Publications!!!!</mark></u></marquee>
 
	<div class="col-md-5 col-md-offset-3 card">
		<br>
                  <?php
                   foreach ($pubs as $pub) {
                    echo "<div class='card'>
                    
                             <div class='card-header'>";
                                  
                                   $sql = $db->getDB()->prepare('SELECT * FROM users');
                                   $sql->execute();

                                     $data = $sql->fetchAll(PDO::FETCH_OBJ);

                                     for ($i=0; $i <count($data); $i++) { 
                                         if ($data[$i]->id == $pub->iduser) {
                                              $iduser=$data[$i]->id;
                                             echo "<strong class='card-title mb-3'>";
                                             echo $data[$i]->login.'</strong> a publié: &nbsp;&nbsp;'.$pub->titre;
                                               
                                           }
                                       
                                      }
                                      
                            echo" </div>
                            <div class='card-body'>";
                    if (strlen($pub->contenu)>50) {
                        
                             echo   "<div class='mx-auto d-block'>";
                                echo'    <p>'.substr($pub->contenu,0,50).'</p>';
                               echo" </div>
                                <hr>
                                <div class='card-text text-sm-center'>
                                    
                                    <a href='pubvue.php?c=$pub->contenu' class='btn btn-primary'>Voir plus</a>
                                </div>";
                            
                    }
                    else
                    {
                        echo "<div class='mx-auto d-block'>
                              <p>$pub->contenu</p>
                        </div>
                            <hr>";
                    }
                            
                        echo "</div>  
                        </div>
                        <hr>
                        <br>";
                    }
                    echo "<div class='col-md-3'>
                          <a href='connexion.php' class='btn btn-info'>Ajouter pub</a>
                         </div>";
                  ?>              
     </div>
</body>
</html>