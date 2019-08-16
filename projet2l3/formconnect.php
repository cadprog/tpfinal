<?php

include "connexion.php";
 $form = new form();

?>

<body>
	<link rel="stylesheet" type="text/css" href="bootstrap-cerulean.min.css">
<marquee behavior="" direction=""><u><mark style="font-size: 28px">Veuillez vous connecter!!!</mark></u></marquee>
	<div class="container col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Formulaire de Connexion</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
				   <form method="POST" action="">
				    	<?php

                          $form->input("login");
                          $form->input("password");
                           $form->submit();
                            $form->reset();
				    	?>
				  </form>
				</div>
				<div class="col-md-4"></div>
			</div>
			</div>
		</div>
	</div>
</body>