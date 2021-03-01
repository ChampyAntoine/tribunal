<?php
require("include/header.html");
$html = <<<HTML

<main>
	<div id="partenaires">
	<div id="titre-partenaires">
		<h2>Les avocats</h2>
	</div>
		
			<article class="avocat">
				
				<div id="texte-partenaires">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<p>
				</div>
			</article>
			<div id="titre-partenaires">
		<h2>Les Notaires</h2>
	</div>
			<article class="notaire">
				<div id="texte-partenaires">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</article>
			<div id="titre-partenaires">
		<h2>Les huissiers</h2>
	</div>
			<article class="huissier">
				<div id="texte-partenaires">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</article>
			
	
	</div>
<main>
HTML;

echo($html);
require("include/footer.html");