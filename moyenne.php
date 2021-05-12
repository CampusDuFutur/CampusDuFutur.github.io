<!DOCTYPE html>

<html>
<head>
  <meta charset = "utf-8" />
  <title> Login </title>
</head>
<body>
<?php
require('config.php');


session_start();

$nb_note = 4;


$cherche_note = $bdd -> query('SELECT * FROM personne WHERE identifiant = \'' . $_SESSION['identifiant'] . '\'');

while ($donnees = $cherche_note -> fetch()){

	if ($donnees['note_chap1'] == 0){

		$nb_note = $nb_note - 1 ;

	}

	if ($donnees['note_chap2'] == 0){

		$nb_note = $nb_note - 1 ;

	}

	if ($donnees['note_chap3'] == 0){

		$nb_note = $nb_note - 1 ;

	}

	if ($donnees['note_chap4'] == 0){

		$nb_note = $nb_note - 1 ;

	}

	$moyenne = ($donnees['note_chap1'] + $donnees['note_chap2'] + $donnees['note_chap3'] + $donnees['note_chap4'])/$nb_note;

}
var_dump($moyenne);

$ajouter_moyenne  = $bdd->prepare('UPDATE personne SET moyenne = :moyenne WHERE identifiant = :identifiant');

$ajouter_moyenne -> execute(array('moyenne' => $moyenne, 'identifiant' => $_SESSION['identifiant']));


?>
</body>
</html>


