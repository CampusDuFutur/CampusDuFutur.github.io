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
		<button
		class = "button"
		type = "button"
		onclick = "window.location.href='Cours.php';">
		Retour
		</button>
		<br>
		 <?php
    		session_start();
    		$id_matiere='1';
   			 include("acceBDD.php");  
    		?>

	</main>


<?php
   			include("footer.php");  
    		?>


</body>
</html>


