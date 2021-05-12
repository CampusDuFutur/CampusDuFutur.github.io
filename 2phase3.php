<!DOCTYPE html>

<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>CAMPUS v2</title>
    </head>

    <body>
    	

    	<header>
			<div id="TrieHeader">
    			<h1> <div class="element">CAMPUS v2 </div> </h1>
    			<h1> <div class="retour"><a href="1Principale.php">Home</a> </div> </h1>
    			<h1> <a href="logout.php"><input type="button" value="Deconnexion"></a> </h1>
			</div>
		</header>


    	<div id="header">
    		<h1> </h1>
    	</div> 
        <!-- Corps de la page -->
        <h2><span id="title">Différents chapitres :</span></h2>


        <?php
        session_start();
        if($_SESSION['statut']!="0"){
        	header("Location: login.php");
        }
        echo "identifiant:";
        echo $_SESSION["identifiant"];

        echo ", nom : ";
        echo $_SESSION["nom"];
        echo ", prenom : ";
        echo $_SESSION["prenom"];
        ?>

        <div class ="map">
        	<div class= "element1">
        		<section>
        <!-- > bloc 1</!-->
        <h3>   Jeu tests 1  </h3>
        <ol>
        	<li>Innovations</li>

        	<ol>
        	<!-- choix de la note -->
        	<form method="post" action="traitement_note.php">
							  
				<p><label for="note">Notez la compréhension de ce cours</label><br />
					<select name="note1">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select></p>

	        	<li class="avion">Avion</li

			<!--insertion des urls vers fichier -->	
	        <ol>
	        		<ul>
	        	
		        		<li>

		        			<?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 3 AND Ordre_SA = 3');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
		        		</li>

		        	</ul>
		        </ol>
		        
	        	<li class="ballon">Ballon</li>
	        
				<!--insertion des urls vers fichier -->			
	        	<ol>
	        		<ul>
		        		<li>

		        			<?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 3 AND Ordre_SA = 2');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
		        		</li>
		        	</ul>
	        	</ol>

	        	
	        	<li class="bathy">Bathyscaphe</li>

				<!--insertion des urls vers fichier -->
	        	<ol>
	        		<ul>
		        		<?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 3 AND Ordre_SA = 1');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
		        	</ul>
	        	</ol>
	        	<!-- bouton pour envoyer les notes -->
	        	<p>
					<a href="traitement_note.php"><input type="submit" value="Envoyer les notes"></a>
				</p>
				
        		
        	</ol>

        	<li>Introduction</li>			
		
        	<!-- choix de la note -->
        					
        	
							    <p><label for="note">Notez la compréhension de ce cours</label><br />
							       <select name="note2" >
							           <option value="0">0</option>
							           <option value="1">1</option>
							           <option value="2">2</option>
							           <option value="3">3</option>
							           <option value="4">4</option>
							           <option value="5">5</option>
							       </select></p>
			<!--insertion des urls vers fichier -->				   
        	<p><?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 1 AND Ordre_SA = 0');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?></p>
        	<!-- bouton pour envoyer les notes -->
        	<p>
				<a href="traitement_note.php"><input type="submit" value="Envoyer les notes"></a>
			</p>
			
        	<li>La famille Piccard</li>
        	
        	<ol>
        	<!-- choix de la note -->
        	
							  
				<p><label for="note">Notez la compréhension de ce cours</label><br />
					<select name="note3" >
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select></p>
        	
	        	<li class="auguste">Auguste Piccard</li>
	        				
				<!--insertion des urls vers fichier -->			
	        	<ol>
	        		<ul>
	        			<?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 2 AND Ordre_SA = 1');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
			        </ul>
			    </ol>
	        	<li class="bertrand">Bertrand Piccard</li>
	        	
				<!--insertion des urls vers fichier -->			
	        	<ol>
	        		<ul>
			        	<?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 2 AND Ordre_SA = 3');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
			        </ul>
			    </ol>
	        	<li class="jacques">Jacques Piccard</li>

				<!--insertion des urls vers fichier -->			   
	        	<ol>
	        		<ul>
			        	<?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 2 AND Ordre_SA = 2');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
        			</ul>
        		</ol>

        	</ol>
        	<!-- bouton pour envoyer les notes -->
        	<p>
				<a href="traitement_note.php"><input type="submit" value="Envoyer les notes"></a>
			</p>
			
        </ol>
    </section>
    </div>
    <div class =" element2">
    	<section>
        <!-- > bloc 2</!-->
        <h3>Jeu tests 2</h3>

        <p><a href="S2_2-Jeu_tests_2\Resource_Jeu_tests_2.csv">Resource_Jeu_tests_2.csv</a></p>
       
        <p>Lab :</p>
        
        <ol>
        	<!-- choix de la note -->
        	
							  
				<p><label for="note">Notez la compréhension de ce cours</label><br />
					<select name="note4" >
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select></p></form>
        	
	        <li class="lab1">Lab 1</li>
	        				
			<!--insertion des urls vers fichier -->				
	        <ol>
	        	<ul>
			        <?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 1 AND Ordre_SA = 1');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
			    </ul>
			</ol>
	        
			
	        <li class="lab2">Lab 2</li>
	        
							 
			<!--insertion des urls vers fichier -->				
	        <ol>
	        	<ul>
			        <?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 1 AND Ordre_SA = 2');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
			    </ul>
			</ol>

			
	        <li class="lab3">Lab 3</li>
			<!--insertion des urls vers fichier -->				   
	        <ol>
	        	<ul>
			        <?php
		        				//echo "<a  href="S2_1-Jeu_tests_1\Innovations\Avion\Avion.pdf">Avion.pdf</a>";
		        				require('config.php');
		        				$lien = $bdd->query('SELECT cible, Ressource, Ordre_A, Ordre_SA from TABLE2 WHERE Ordre_A = 1 AND Ordre_SA = 3');
		        				while ($donnees = $lien->fetch()){
									//echo $donnees['cible'] . '<br />';
									//echo href=$donnees['cible'];
									echo '<a href='.$donnees['cible'].'> '.$donnees['Ressource'].' <br/> </a>';
								}
								$lien->closeCursor();

		        			?>
			    </ul>
			</ol>
			<!-- bouton pour envoyer les notes -->
        	<p>
				<a href="traitement_note.php"><input type="submit" value="Envoyer les notes"></a>
			</p>
			
        </ol>
    </section>
    </div>
    
    
    <!-- > bouton aide <!-->
    <section>
    	<div class="element3">
    	<aside>
    		<figure>
    		<img src = "bouton_aide.png" class="flottante" alt= "image_bouton"/><a href="image_ocre.jpg" target="_blank">besoin d'aide pour le financement des études ? </a>
    	</figure>
   	    </aside>
   	</div>
   </section>
</div>
    </body>
</html>