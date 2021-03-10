<?php
$title = "Site de Sévigné";
require("header.php");
$html = <<<HTML

<main>
	<div id="tribunaux" class="div">
		<h2>Site Madame de Sévigné (ancien tribunal d'instance)</h2>
		<section class="section">
			<article class="art">
				<div class="img-art">
					<img src="./src/image/DSC_0034.JPG">
				</div>
				</section>
				<section class="section">
				<div class="texte-tri">
					<h4>Pôle civil</h4>
					<p>Le pôle civil géré par le Juge de l'exécution et le Juge des contentieux de la protection hors de chambre de proximité, regrroupe les situations tel que la protection des majeurs, le bail d'habitation, le crédit à la consommation et le surendettement.</p>
				</div>
			</article>
			</section>
			<article class="tribunal">
				
				<section class="section">
				<div class="texte-tri">
					<h3>Contact</h3>
					<p>12 Rue Madame de Sévigné, 08000 Charleville-Mézières, France</p>
					<p>+33324563413</p>
				</div>
				</section>
				<section class="section">
				<div class="img-art">
					<img src="./src/image/carte-sevigne.png">
				</div>
				</section>
			</article>
			
			
<main>
HTML;

echo($html);
require("include/footer.html");