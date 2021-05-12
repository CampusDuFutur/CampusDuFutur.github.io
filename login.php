<!DOCTYPE html>

<html>
<head>
  <meta charset = "utf-8" />
  <title> Login </title>
</head>
<body>

  <?php
  require('config.php');
  $mdpCorrect=false;
  if (isset($_POST['identifiant'], $_POST['mot_de_passe'])){
    $verification = $bdd->prepare('SELECT identifiant, mot_de_passe, statut, nom, prenom FROM personne WHERE identifiant = :identifiant');
    $verification ->execute(array('identifiant'=>$_POST['identifiant']));
    $resultat = $verification->fetch();

    if($_POST['mot_de_passe']==$resultat['mot_de_passe'] AND $_POST['mot_de_passe']!=''){
      $mdpCorrect=true;
    }

    if(!$verification){
        echo "Mauvais id ou mdp !";
    }
    else{}
    if($mdpCorrect){

        session_start();
        $_SESSION["statut"]= $resultat['statut'];
        $_SESSION["identifiant"]= $resultat['identifiant']; 
        $_SESSION["nom"]= $resultat['nom']; //
        $_SESSION["prenom"]= $resultat['prenom']; //

        if ($_GET["parametre1"]==2){
          if($resultat['statut']==1){     // ==1 => que les profs
            header("Location: 2phase2.php");
            }          
          else{
          header("Location: 2phase2a.php?parametre2=3"); // = 3 => mauvais statut
            }
          }

        if ($_GET["parametre1"]==3){
          if($resultat['statut']==0){     // ==0 => que les eleves
            header("Location: 2phase3.php");
            }          
          else{
          header("Location: 2phase3a.php?parametre2=3");
          }

        }
        if ($_GET["parametre1"]==4){
          if($resultat['statut']==1){
            header("Location: 3phase4a.php");
            }          
          else{
          header("Location: 3phase4b.php");
          }
        }

      }

      else{
        if ($_GET["parametre1"]==2){
          header("Location: 2phase2a.php?parametre2=1"); // =1 => mauvais mdp
          }
        if ($_GET["parametre1"]==3){
          header("Location: 2phase3a.php?parametre2=1");
        }
        if ($_GET["parametre1"]==4){
          header("Location: 2phase4a.php?parametre2=1");
        }
        
      }
  }
  else{
    header("Location: 1principale.php");
  }
  ?>
</body>
</html>