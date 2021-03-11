<?php
$title = "Site de Sévigné";
require("include/header.php");
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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10308.222128636175!2d4.7109235368387665!3d49.76621237018734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e08d99a36cd%3A0x1d06a36bf8590aba!2sTribunal%20d%E2%80%99Instance!5e0!3m2!1sfr!2sfr!4v1615380934261!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</section>
		</article>
			
			
</main>
HTML;

echo($html);
require("include/footer.php");