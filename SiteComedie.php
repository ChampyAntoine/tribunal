<?php
$title = "Site de Comédie";
require("include/header.php");
$html = <<<HTML

<main>
	<div id="tribunaux" class="div">
		<h2 class="h2">Site Comédie Sedan</h2>
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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2580.443700185309!2d4.941957415381411!3d49.70244797937918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea6ef0dd9a62ab%3A0x33b6d3bcd4ff160e!2sTribunal%20D&#39;Instance!5e0!3m2!1sfr!2sfr!4v1615380831509!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</section>
		</article>
		
</main>
HTML;

echo($html);
require("include/footer.php");