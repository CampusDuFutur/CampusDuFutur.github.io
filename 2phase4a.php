<!DOCTYPE html>

<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Campus v2</title>
    </head>

    <body>
        <!-- Corps de la page -->
        
        <h1>Authentification</h1>
        <center>
        <form method="post" action="login.php?parametre1=4">
        <aside>
        <p>
       <label for="pseudo">Votre identifiant :</label>
       <input type="number" name="identifiant" id="pseudo" />
       
       <br />
       <label for="pass">Votre mot de passe :</label>
       <input type="password" name="mot_de_passe" id="pass" />
       <br/>

       <?php
       if ($_GET["parametre2"]==1){
        echo '<span style="color:#ff491f;text-align:center;"> Mot de passe incorrect !</span>';

     }
     elseif ($_GET["parametre2"]==3){
        echo '<span style="color:#ff491f;text-align:center;"> Votre statut ne vous permet pas d avoir acces a cette phase!</span>';
      }
       ?>


       <p class="help"><a class="help" href="mailto:support@campusv2.com?subject=Problème d'identifiant ou de mot de passe">mot de passe oublié ?</a></p>

       <br/>
       <input type="submit" value="Connecté(e)" />
       
        </p>
    </aside>
    </form>
    </center>
    <h2 class="retour"><a href="1Principale.php">RETOUR</a></h2>
     <footer><center><p class="help"><a class="help" href="mailto:contact@campusv2.com?subject=Aide&body=Questions ?">Aide</a></p></center></footer>

    </body>
</html>