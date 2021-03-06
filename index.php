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
						<img src="tribunal1.png">
					</div>
					<div class="texte-art">
						<h3>Le Palais De Justice</h3>
						<p>Site à Charleville-Mézières</p>
					</div>
				</article>
			</a>
			<a href="SiteArquebuse.php">
				<article class="art">
					<div class="img-art">
						<img src="tribunal2.png">
					</div>
					<div class="texte-art">
						<h3>Tribunal Judiciaire</h3>
						<p>Site de Sévigné</p>
					</div>
				</article>
			</a>
			<a href="SiteComedie.php">
				<article class="art">
					<div class="img-art">
						<img src="tribunal3.png">
					</div>
					<div class="texte-art">
						<h3>Tribunal Judiciaire auprès des Conseil de Prud'Hommes</h3>
						<p>Site de l'Arquebuse</p>
					</div>
				</article>
			</a>
			<a href="siteSevigne.php">
				<article class="art">
					<div class="img-art">
						<img src="tribunal4.png">
					</div>
					<div class="texte-art">
						<h3>Tribunal de proximité/tribunal de Commerces</h3>
						<p>Site de Comédie situé à Sedan.</p>
					</div>
				</article> 
			</a>
		</section>
	</div>

	<div class="div">
		<h2>Nos actualités</h2>
		<section class="section">
			<article class="art">
				<div class="img-art">
					<img src="imageactualite.png" alt="">
				</div>
				<div class="texte-art">
					<h3>Une nouvelle organisation</h3>
				</div>
			</article>
			<article class="art">
				<div class="texte-art">
					<p>Depuis le 1er janvier 2020, les 5 juridictions ont été ramenées à 3 afin de rendre la justice plus accessible et plus lisible. </p>
				</div>
			</article>
		</section>
	</div>

	<div class="div droits">
		<h2>Vos droits</h2>
		<p> Veuillez trouver sur ces sites de justices, les dispositifs qui sont à disposition des citoyens et des justiciables.
		<ul>
			<li>
				<a href="http://www.justice.fr">http://www.justice.fr</a>
			</li>
			<li>
				<a href="http://www.justice.gouv.fr">http://www.justice.gouv.fr</a>
			</li>
			<li>
				<a href="http://www.service-public.fr">http://www.service-public.fr</a>
			</li>
		</ul>
	</div>
</main>
HTML;

echo($html);
require("include/footer.html");