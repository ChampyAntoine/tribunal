<?php
require("include/header.html");
$html = <<<HTML

<main>
	<div id="partenaires">
		<article class="avocat">
			<h2>Les avocats</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<p>
		</article>
		
		<article class="notaire">
			<h2>Les Notaires</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		</article>

		<article class="huissier">
			<h2>Les huissiers</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		</article>
	</div>
<main>
HTML;

echo($html);
require("include/footer.html");