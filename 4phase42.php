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
        <h1>Introduction</h1>
        <h2 class="retour"><a href="1Principale.php">HOME</a></h2>
        <h2 class="suivi">Suivi d'activité</h2>
        <form method="post" action="traitement.php">
            <!-- barre de progression -->
            <head>
                <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
                <title>barre de progression</title>
                <style type="text/css">      
                #barre_100 {background:grey; width:200px; height:20px;}
                #barre_valeur {background:green;width:{{pourcent_introduction/2}}px; height:20px;}
                </style>
                </head>
                <body>
                <div id="barre_100">
                <div id="barre_valeur">
                </div>
                </div>
                <p>Progression : {{pourcent_introduction/2}}%</p>
                </body>
                <!-- fenetre de commentaire et bouton envoyer et annuler -->
           <p>
               <label for="ameliorer">
               Avez-vous des questions sur le chapitre ou des suggestions pour l'améliorer ?
               </label>
               <br />
               
               <textarea name="ameliorer" id="ameliorer" rows="10" cols="100">
               </textarea>       
           </p>
           <input type="submit" name="nom" value=" Envoyer ">
           <input type="reset" name="nom" value=" Annuler ">
        </form>
        <p>
            <a href="traitement.php"><input type="button" value="Déconnexion"></a>
        </p>
        <h2 class="retour"><a href="3phase4a.php">RETOUR</a></h2>
    </body>
</html>