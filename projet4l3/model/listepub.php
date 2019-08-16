<?php
 
 /**
  * 
  */
 class publiste
 {
 	 private $champs;

 	 public function Nom($champs){

   echo " <div class='card-header
                    <strong class='card-title mb-3'>$champs</strong> a publié:
          </div>";
    }

   public function Textarea($champs){

   echo "<div class='mx-auto d-block'>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium natus commodi quidem ea illo distinctio dolorum iste, doloremque, ratione minus laborum vitae possimus necessitatibus impedit repudiandae deleniti quia labore. Ex?
             </p>
        </div>";
              }

   public function Voirplus(){
     echo" <div class='card-text text-sm-center'>
                   <a href='#' class='btn btn-primary'>Voir plus</a>
          </div>";
   }

   public function Ajouterpub(){
     echo" <div class='col-md-3'>
                 <a href='createpub.php' class='btn btn-info'>Ajouter pub</a>
           </div>";
   }

 }


?>