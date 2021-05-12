<?php
if(isset($_FILES['avatar']))
{ 
     $dossier = 'S2_1-jeu_tests_1/Innovations/';
     $fichier = basename($_FILES['avatar']['name']);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          header("Location: 2phase2.php");
		  
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
?>