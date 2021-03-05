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
						<h3>Tribunal 1</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</article>
			</a>
			<a href="SiteArquebuse.php">
				<article class="art">
					<div class="img-art">
						<img src="tribunal2.png">
					</div>
					<div class="texte-art">
						<h3>Tribunal 2</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</article>
			</a>
			<a href="SiteComedie.php">
				<article class="art">
					<div class="img-art">
						<img src="tribunal3.png">
					</div>
					<div class="texte-art">
						<h3>Tribunal 3</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</article>
			</a>
			<a href="siteSevigne.php">
				<article class="art">
					<div class="img-art">
						<img src="tribunal4.png">
					</div>
					<div class="texte-art">
						<h3>Tribunal 4</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
					<h3>Titre Actu</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</article>
			<article class="art">
				<div class="texte-art">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus nunc at eros tincidunt congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vel volutpat ex, quis vehicula felis. Donec sit amet leo viverra, vestibulum lectus ac, tempus libero. </p>
				</div>
			</article>
		</section>
	</div>

	<div class="div droits">
		<h2>Vos droits</h2>
		<ul>
			<li>
				<a href="">lien1</a>
			</li>
			<li>
				<a href="">lien2</a>
			</li>
			<li>
				<a href="">lien3</a>
			</li>
		</ul>
	</div>
</main>
HTML;

echo($html);
require("include/footer.html");