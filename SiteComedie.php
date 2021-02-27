<?php
require("include/header.html");
$html = <<<HTML

<main>
	<div id="tribunaux">
		<h2>Site Comédie Sedan</h2>
		<section class="section-tribunaux">
			<article class="tribunal">
				<div class="img-tribunal">
					<img src="tribunal4.png">
				</div>
				<div id="texte-tribunal">
					<h3>Le Tribunal d'instance devient chambre de proximité</h3>
					<p>Le tribunal de proximité peut être compétent pour les affaires civiles lorsque le montant des demandes est inférieur ou égal à 10 000 €. Pour déterminer la valeur du litige, il faut prendre en compte le montant total des demandes.

Le tribunal de proximité peut se voir confier par décision des chefs de la cour d'appel certains litiges habituellement confiés au tribunal judiciaire.</p>
				</div>
			</article>
			<article class="tribunal">
				
				<div id="coordonnees-tribunal">
					<h3>Contact</h3>
					<p>1 Rue de la Comédie, 08200 Sedan, France</p>
					<p>+33324291017</p>
				</div>
				<div class="img-tribunal">
					<img src="tribunal4.png">
				</div>
			</article>
			
<main>
HTML;

echo($html);
require("include/footer.html");