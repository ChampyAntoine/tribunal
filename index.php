<?php
require("include/header.html");
$html = <<<HTML

<main>
	<div id="tribunaux">
		<h2>Les tribunaux</h2>
		<section class="section-tribunaux">
			<article class="tribunal">
				<div class="img-tribunal">
					<img src="tribunal1.png">
				</div>
				<div id="texte-tribunal">
					<h3>Tribunal 1</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<p>
				</div>
			</article>
			<article class="tribunal">
				<div class="img-tribunal">
					<img src="tribunal2.png">
				</div>
				<div id="texte-tribunal">
					<h3>Tribunal 2</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</article>
			<article class="tribunal">
				<div class="img-tribunal">
					<img src="tribunal3.png">
				</div>
				<div id="texte-tribunal">
					<h3>Tribunal 3</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</article>
			<article class="tribunal">
				<div class="img-tribunal">
					<img src="tribunal4.png">
				</div>
				<div id="texte-tribunal">
					<h3>Tribunal 4</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</article> 
		</section>
	</div>

	<div id="actualites">
		<h2>Nos actualités</h2>
		<section class="section-actualites">
			<article class="daily-actu">
				<div id="img-actualite">
					<img src="imageactualite.png" alt="">
				</div>
				<div id="titre-actualite">
					<h2>Titre Actu</h2>
				</div>
				<div class="description-actualite">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</article>
		</section>
	</div>

	<div id="droits">
		
		<h2> Vos droits </h2>
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
<main>
HTML;

echo($html);
require("include/footer.html");