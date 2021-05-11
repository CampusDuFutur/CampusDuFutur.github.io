<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="Campus.css" />
	<title>Campus v2</title>
</head>
<body>
	<header>
		<button
			class = "button"
			type = "button"
			onclick = "window.location.href='index.html';">
			logout
		</button>
	</header>


	<main>
			<li><button
			class = "button"
			type = "button"
			onclick = "window.location.href='Campus.php';">
			Retour
				</button>
		
		<ul>
		<?php
		try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=CampusDuFutur;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}

		$reponse = $bdd->query("SELECT Nom_Matiere FROM matiere ");
		
		$acce = "'Maths.php'";
		while ($donnees = $reponse->fetch())
		{
			echo '<button class = "button" OnClick="window.location.href='.$acce.';">'.$donnees['Nom_Matiere'];
		}
		?>
		
		</ul>

	</main>


<?php
   			include("footer.php");  
    		?>


</body>
</html>