<!DOCTYPE html>
<html>
<head>
	<title>publication</title>
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
    
    <!--link rel="stylesheet" href="assets/scss/style.css"-->
<marquee behavior="" direction=""><u><mark style="font-size: 28px">Voici la publication toute entière!!!!</mark></u></marquee>
 
	<div class="col-md-5 col-md-offset-3 card">
		<br>
        <div class='card'>
                    
                    <div class='card-header'>
                         <strong class='card-title mb-3'>Nom</strong> a publié:
                    </div>

<?php

  if (isset($_GET["c"])) {
      
             echo" <div class='card-body'>
                                <div class='mx-auto d-block'>
                                    <p>".$_GET["c"]."</p>
                                </div>
                                <hr>
                                <div class='card-text text-sm-center'>
                                    
                                    <a href='index.php' class='btn btn-primary'>Retour</a>
                                </div>
                            </div>";
      
  }

?>
        </div>

	</div>
</body>
</html>