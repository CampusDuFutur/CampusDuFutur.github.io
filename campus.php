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
		<ul>
			<li><button
			class = "button"
			type = "button"
			onclick = "window.location.href='cours.php';">
			Cours
				</button>
			</li>
			<li><button
			class = "button"
			type = "button"
			onclick = "window.location.href='Emplois_Du_Temps.php';">
			Emplois du temps
				</button>
			</li>
			<li><button
			class = "button"
			type = "button"
			onclick = "window.location.href='Document.php';">
			Documents
				</button>
			</li>
		

		</ul>

	</main>


	<?php
   			include("footer.php");  
    		?>


</body>
</html>