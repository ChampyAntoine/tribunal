<?php
$title = "Accueil";
require("include/header.php");
$html = <<<HTML

<main>
	<div id="tribunaux" class="div">
		<h2>Les tribunaux</h2>
		<section class="section">
			<a href="palaisJustice.php">
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
			<a href="siteSevigne.php">
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
			<a href="SiteArquebuse.php">
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
			<a href="SiteComedie.php">
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

	<!--<div class="div">
		<h2>Nos actualités</h2>
		<section class="section">
			<a href="actualites.php">
				<article class="art">
					<div class="img-art">
						<img src="./src/image/nouvelle-organisation.png" alt="">
					</div>
					<div class="texte-art">
						<h3>Une nouvelle organisation</h3>
					</div>
				</article>
			</a>
			<article class="art">
				<div class="texte-art">
					<p>Depuis le 1er janvier 2020, les 5 juridictions ont été ramenées à 3 afin de rendre la justice plus accessible et plus lisible. </p>
					<input class="button"
       type="button"
       value="En savoir plus">
				</div>
			</article>
		</section>
	</div>-->

	<div class="div droits">
		<h2>Vos droits</h2>
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
require("include/footer.html");