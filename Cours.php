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
			<li><button
			class = "button"
			type = "button"
			onclick = "window.location.href='Maths.php';">
			Maths
				</button>
			</li>
			<li><button
			class = "button"
			type = "button"
			onclick = "window.location.href='Physique.php';">
			Physique
				</button>
			</li>
			<li><button
			class = "button"
			type = "button"
			onclick = "window.location.href='Informatique.php';">
			Informatique
				</button>
			</li>
		

		</ul>

	</main>

		 <?php
   			include("footer.php");  
    		?>




</body>
</html>