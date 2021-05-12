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

		if (isset($_POST['note1']) AND $_POST['note1'] > 0){ 

			$ajout_note  = $bdd->prepare('UPDATE personne SET note_chap1 = :note_chap1 WHERE identifiant = :identifiant');

			$ajout_note -> execute(array('note_chap1' => $_POST['note1'], 'identifiant' => $_SESSION['identifiant']));

			header("Location: 2phase3.php");

		}

		if (isset($_POST['note2']) AND $_POST['note2'] > 0){ 

			$ajout_note  = $bdd->prepare('UPDATE personne SET note_chap2 = :note_chap2 WHERE identifiant = :identifiant');

			$ajout_note -> execute(array('note_chap2' => $_POST['note2'], 'identifiant' => $_SESSION['identifiant']));

			header("Location: 2phase3.php");

		}

		if (isset($_POST['note3']) AND $_POST['note3'] > 0){ 

			$ajout_note  = $bdd->prepare('UPDATE personne SET note_chap3 = :note_chap3 WHERE identifiant = :identifiant');

			$ajout_note -> execute(array('note_chap3' => $_POST['note3'], 'identifiant' => $_SESSION['identifiant']));

			header("Location: 2phase3.php");

		}

		if (isset($_POST['note4']) AND $_POST['note4'] > 0){ 

			$ajout_note  = $bdd->prepare('UPDATE personne SET note_chap4 = :note_chap4 WHERE identifiant = :identifiant');

			$ajout_note -> execute(array('note_chap4' => $_POST['note4'], 'identifiant' => $_SESSION['identifiant']));

			header("Location: 2phase3.php");

		}
        
		
		?>


</body>
</html>