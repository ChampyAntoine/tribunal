<?php
$title = "Accueil";
require("include/header.php");
$cheminImg = "src/image/carrousel.jpg";
require("include/carousel.php");
$html = <<<HTML
<div class="container">
<main>
	<div id="tribunaux-index" class="div">
		<h2 class="h2">Les tribunaux</h2>
		<section class="section">
			<a class="lien-a" href="siteEsplanade.php">
				<article class="art">
					<div class="img-art">
						<img src="./src/image/DSC_0030.JPG">
					</div>
					<div class="texte-art">
						<h3>Le Palais De Justice</h3>
						<p>Site à Charleville-Mézières</p>
					</div>
				</article>
			</a>
			<a class="lien-a" href="siteSevigne.php">
				<article class="art">
					<div class="img-art">
						<img src="./src/image/DSC_0034.JPG">
					</div>
					<div class="texte-art">
						<h3>Tribunal Judiciaire</h3>
						<p>Site de Sévigné</p>
					</div>
				</article>
			</a>
			<a class="lien-a" href="siteArquebuse.php">
				<article class="art">
					<div class="img-art">
						<img src="./src/image/DSC_0041.JPG">
					</div>
					<div class="texte-art">
						<h3>Tribunal auprès des CPH</h3>
						<p>Site de l'Arquebuse</p>
					</div>
				</article>
			</a>
			<a class="lien-a" href="siteComedie.php">
				<article class="art">
					<div class="img-art">
						<img src="./src/image/DSC_0078.JPG">
					</div>
					<div class="texte-art">
						<h3>Tribunal de Commerces</h3>
						<p>Site de Comédie situé à Sedan.</p>
					</div>
				</article> 
			</a>
		</section>
	</div>
	<div id="vosdroits"class="div droits">
		<h2 class="h2">Vos droits</h2>
		<section class="section">
		<p> Veuillez trouver sur ces sites de justices, les dispositifs qui sont à disposition des citoyens et des justiciables.
		<ul>
			<a href="https://www.justice.fr">
				<li>justice.fr</li>
			</a>
			<a href="https://www.justice.gouv.fr">
				<li>justice.gouv.fr</li>
			</a>
			<a href="https://www.service-public.fr">
				<li>service-public.fr</li>
			</a>
		</ul>
		</section>
	</div>
</main>
HTML;

echo($html);
require("include/footer.php");