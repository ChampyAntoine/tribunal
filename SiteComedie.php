<?php
$title = "Site de Comédie";
require("include/header.php");
$html = <<<HTML

<main>
	<div id="tribunaux" class="div">
		<h2>Site Comédie Sedan</h2>
		<section class="section">
			<article class="art">
				<div class="img-art">
					<img src="./src/image/DSC_0078.JPG">
				</div>
				</section>
				<section class="section">
				<div class="texte-tri">
					<h4>Le Tribunal d'instance devient chambre de proximité</h4>
					<p>Le tribunal de proximité peut être compétent pour les affaires civiles lorsque le montant des demandes est inférieur ou égal à 10 000 €. Pour déterminer la valeur du litige, il faut prendre en compte le montant total des demandes.

Le tribunal de proximité peut se voir confier par décision des chefs de la cour d'appel certains litiges habituellement confiés au tribunal judiciaire.</p>
				</div>
			</article>
			</section>
			<article class="tribunal">
				<section class="section">
				<div class="texte-tri">
					<h3>Contact</h3>
					<p>1 Rue de la Comédie, 08200 Sedan, France</p>
					<p>+33324291017</p>
				</div>
				</section>
				<section class="section">
				<div class="img-art">
					<img src="./src/image/carte-comedie.png">
				</div>
				</section>
			</article>
		
<main>
HTML;

echo($html);
require("include/footer.html");