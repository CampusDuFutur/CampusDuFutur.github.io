     	<?php
		try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=CampusDuFutur;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("SELECT Nom_Chapitre FROM chapitre where Id_matiere='$id_matiere'");
		
		
		while ($donnees = $reponse->fetch())
		{
			
			echo '<button class = "button" type = "button">'.$donnees['Nom_Chapitre'];
		}

		$reponse->closeCursor();

		?>

		