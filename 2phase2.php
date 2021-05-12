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
        <h1>Création et ajout de documents</h1>
        
    	

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


        <div class ="map">
        	<div class= "element1">
        		<section>
        <!-- > bloc 1</!-->
        <h3>   Jeu tests 1  </h3>
        <ol>
        	<li>Innovations</li><!--ajout de fichier --><input type="file" accept=".png, .jpeg, .jpg, .pdf">
        	<ol>
        	
	        	<li class="avion">Avion</li>
					
			<!--insertion des urls vers fichier -->	
	        <ol>
	        		<ul>
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
		        	</ul>
		        </ol>
		        
	        	<li class="ballon">Ballon</li>
	        
				<!--insertion des urls vers fichier -->			
	        	<ol>
	        		<ul>
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
	        	
        	</ol>

        	<li>Introduction</li><!--ajout de fichier --><input type="file" accept=".png, .jpeg, .jpg, .pdf">

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
        	
        	<li>La famille Piccard</li><!--ajout de fichier --><input type="file" accept=".png, .jpeg, .jpg, .pdf">

        	<ol>
        	
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
        	
        </ol>
    </section>
    </div>
    <div class =" element2">
    	<section>
        <!-- > bloc 2</!-->
        <h3>Jeu tests 2</h3>

        <p><a href="S2_2-Jeu_tests_2\Resource_Jeu_tests_2.csv">Resource_Jeu_tests_2.csv</a></p>
       
        <p>Lab :</p><!--ajout de fichier --><input type="file" accept=".png, .jpeg, .jpg, .pdf">
			
        <ol>
        	
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