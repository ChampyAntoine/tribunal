<?php
$title = "Site de Sévigné";
require("include/header.php");
$html = <<<HTML

<main>
	<div id="tribunaux">
		<h2>Site Madame de Sévigné (ancien tribunal d'instance)</h2>
		<section class="section-tribunaux">
			<article class="tribunal">
				<div class="img-tribunal">
					<img src="tribunal2.png">
				</div>
				<div id="texte-tribunal">
					<h4>Pôle civil</h4>
					<p>Le pôle civil géré par le Juge de l'exécution et le Juge des contentieux de la protection hors de chambre de proximité, regrroupe les situations tel que la protection des majeurs, le bail d'habitation, le crédit à la consommation et le surendettement.</p>
				</div>
			</article>
			<article class="tribunal">
				
				<div id="coordonnees-tribunal">
					<h3>Contact</h3>
					<p>12 Rue Madame de Sévigné, 08000 Charleville-Mézières, France</p>
					<p>+33324563413</p>
				</div>
				<div class="img-tribunal">
					<img src="tribunal2.png">
				</div>
			</article>
			
<main>
HTML;

echo($html);
require("include/footer.html");