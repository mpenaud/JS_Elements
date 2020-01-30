<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex,nofollow">
	<title>JS | CANVAS DEMO </title>

	<!-- CSS FILE -->
	<link rel="stylesheet" href="style.css" />

	<!--CSS BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- LIB BOOTSTRAP-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

	<!--SCRIPT BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width" />

	<script type="text/javascript">

		/***** DEMO AFFICHAGE RECTANGLE ****/
		function rectangle() {
			var canevas = document.getElementById("rectangle");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)"; // ne pas oublier les guillemets
			contexte.fillRect(10,45,100,30); // l'origine (coordonées(0,0)) est situé en haut à gauche

			//attention l'axe des ordonné (y) est dirigée vers le bas !
		}

		/**** DEMO CREATION TRIANGLE *****/
		function triangle() {
			var canevas = document.getElementById("triangle");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)";

			contexte.beginPath();
			contexte.moveTo(45,50);
			contexte.lineTo(85,90);
			contexte.lineTo(85,25);
			contexte.fill();
		}

		/**** DEMO CREATION CERCLE *****/
		function cercle(){
			var canevas = document.getElementById("cercle");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)"; // ne pas oublier les guillemets
			contexte.fillRect(0,0,canevas.width,canevas.height);

			contexte.beginPath();
			contexte.fillStyle = "black";
			contexte.arc(60,60,30,0,2*Math.PI, true); // 120=x 200=y 30=rayon 0= angle de départ 2*Math.PI=angle true=sens de rotation
			contexte.fill();
			contexte.closePath();	
		}

		/****** DEMO CREATION ARC********/
		function arc() {
			var canevas = document.getElementById("arc");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)"; // ne pas oublier les guillemets
			contexte.fillRect(0,0,canevas.width,canevas.height);

			//un deuxième arc
			contexte.beginPath();
			contexte.strokeStyle = 'black';
			contexte.lineWidth = 2; // largeur du tracé
			contexte.lineCap = 'round'; // bout arrondis
			contexte.arc(60,60,20,Math.PI/4, -Math.PI/2, false); // Création des arrondis
			contexte.stroke();
			contexte.closePath();
		}

		/**** DEMO CREATION SEGMENT *****/
		function segment(){
			var canevas = document.getElementById("segment");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)"; // ne pas oublier les guillemets
			contexte.fillRect(0,0,canevas.width,canevas.height);

			contexte.beginPath();
			contexte.strokeStyle = 'black';
			contexte.moveTo(10,30);
			contexte.lineTo(50,50);
			contexte.lineTo(100,50);
			contexte.lineTo(100,100);
			contexte.stroke();
			contexte.closePath();
		}

		/******** DEMO CREATION GRAPHIQUE *********/ 
		function graphique() {
			var canevas = document.getElementById("graphique");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)"; // ne pas oublier les guillemets
			contexte.fillRect(0,0,canevas.width,canevas.height);

			<?php
			/* Fonction PHP pour générer le tab du graphique */ 
			function genererTableauAleatoire() {
				echo "new Array(";
				for ($i=0; $i < 9; $i++) { 
					echo rand (1,20), ",";
				}
				echo rand(0,20),")";
			}
			?>

			<?php  echo "var tab=" , genererTableauAleatoire(), ";";   ?>
			//parcours du tableau
			for (i=0; i<3; i++) {
				contexte.fillStyle = "rgba(0,0,0)";
				contexte.fillRect(20+i*30,100,20,-tab[i]*4);
			}

		}

		/**** DEMO AFFICHAGE TEXTE *****/
		function texte() {
			var canevas = document.getElementById("text");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)"; // ne pas oublier les guillemets
			contexte.fillRect(0,0,canevas.width,canevas.height);

			contexte.fillStyle = "black"; // couleur du tracé
			contexte.fillText("La chocolatine", 25, 60);

		}

		/**** DEMO CHANGEMENT POLICE *****/
		function police(){
			var canevas = document.getElementById("police");
			var contexte = canevas.getContext("2d");

			contexte.fillStyle = "rgb(145,230,230)"; // ne pas oublier les guillemets
			contexte.fillRect(0,0,canevas.width,canevas.height);

			contexte.font ="15pt Tahoma"; //Taille et police 
			contexte.fillStyle = 'black'; // Couleur
			contexte.fillText("police", 35,60);
		}
	</script>




</head>
<body>
	<div class="row">
		<div class="container ctn-demo">	
			<div class="row">	
				<div class="col-md-12 text-center">
					<h1>Javascript - Les canvas</h1>
					<h2 style="font-size:18px;line-height: normal">Cliquez sur "Dessiner" pour les afficher.</h2>	
					<div class="colored-line"></div>												
					<div class="row ctn-demo">

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Rectangle</h5>
								<canvas id="rectangle" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="rectangle()">Dessiner</button>
						</div>

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Triangle</h5>
								<canvas id="triangle" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="triangle()">Dessiner</button>
						</div>

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Cercle</h5>
								<canvas id="cercle" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="cercle()">Dessiner</button>
						</div>

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Arc</h5>
								<canvas id="arc" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="arc()">Dessiner</button>
						</div>

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Segment</h5>
								<canvas id="segment" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="segment()">Dessiner</button>
						</div>

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Graphique</h5>
								<canvas id="graphique" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="graphique()">Dessiner</button>
						</div>

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Texte</h5>
								<canvas id="text" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="texte()">Dessiner</button>
						</div>

						<div class="col-md-3 text-center">
							<div class="exemple">
								<h5>Police</h5>
								<canvas id="police" width="120" height="120"></canvas>
							</div>
							<button class="btn btn-warning" onclick="police()">Dessiner</button>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>	
</div>		
</body>
</html>