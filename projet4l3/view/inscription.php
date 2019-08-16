<?php

include "../model/inscription.php";
 
 $inscription = new Inscription();

?>
<head>
  <title>Inscription</title>
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
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="connexion.php" role="tab" aria-controls="pills-contact" aria-selected="false">Publier</a>
                                            </li>
                                        </ul>

                                </div>
                            </div>
                        </div>


<marquee behavior="" direction=""><u><mark style="font-size: 28px">Veuillez vous inscrire!!!</mark></u></marquee>
    <div class="col-md-4 col-md-offset-4 card">
      <br>
                    <div class="card">
                      <div class="card-header">
                        <strong>Inscription</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="../controller/inscriptionController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
           
              <?php

                          $inscription->input("login");
                          $inscription->input("motdepasse");
                           $inscription->submit();
                            $inscription->reset();
              ?>
          </form>
        </div>
      </div>
    </div>
</body>

