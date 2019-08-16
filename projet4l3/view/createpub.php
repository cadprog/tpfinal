<?php

include "../model/createpub.php";
 
 $pubcreate = new pubcreate();

?>
<head>
  <title>Ajout Pub</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style/bootstrap-cerulean.min - Copie">

	<link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link rel="stylesheet" href="style/themify-icons.css">
    <link rel="stylesheet" href="style/flag-icon.min.css">
    <link rel="stylesheet" href="style/cs-skin-elastic.css">
    
    <link rel="stylesheet" href="assets/scss/style.css">


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
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="createpub.php" role="tab" aria-controls="pills-contact" aria-selected="false">Publier</a>
                                            </li>
                                        </ul>

                                </div>
                            </div>
                        </div>


<marquee behavior="" direction=""><u><mark style="font-size: 28px">Vous pouvez ajouter votre publication!!!</mark></u></marquee>
		<div class="col-md-4 col-md-offset-4 card">
			<br>
                    <div class="card">
                      <div class="card-header">
                        <strong>Ajout publication</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="../controller/createpubController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
				   
				    	<?php

                          $pubcreate->input("titre");
                          $pubcreate->textarea("poste");

                         if (isset($_GET["id"])) {
    
                             $iduser=(string)$_GET["id"];
                             echo "<label>login_user</label><br>";
                             echo "<input type='text' name='login_user' value='$iduser' class='form-control' required><br><br>";
  
                          }
                           $pubcreate->submit();
                            $pubcreate->reset();
				    	?>
              
				  </form>
				</div>
			</div>
		</div>
</body>

