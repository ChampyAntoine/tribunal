<?php
require("include/header.html");
$html = <<<HTML

<body>
<div id="page">
<nav>
	<ol>
		<li class="acceuil"><a href="index.php">Accueil</a></li>
		<li class="tribunaux"><a href="tribunaux.php">Tribunaux</a></li>
		<li class="partenaires"><a href="partenaires.php">Partenaires de justices</a></li>
		<li class="actualites"><a href="actualites.php">Nos actualités</a></li>
		<li class="droits"><a href="#vosdroits"> Vos droits</a></li>
	</ol>
</nav>
<div id="couverture">
	<img src="couvertureAccueil.png" alt=""></img>
</div>
<main class="lesTribunaux">
	
    <h1>Les tribunaux</h1>
	<section class="sectionTribunaux">
	<article class="tribunal1">
		<div id="imgTribunal1">
		<img src="tribunal1.png"></img>
		</div>
		<div id="texteTribunal1">
			<h1> Tribunal 1 </h1>
			<p> gklkdgjgjdlkfj </p>
		</div>
	</article>
	<article class="tribunal2">
		<div id="imgTribunal2">
		<img src="tribunal2.png"></img>
		</div>
		<div id="texteTribunal2">
			<h1> Tribunal 2 </h1>
			<p> gklkdgjgjdlkfj </p>
		</div>
	</article>
	<article class="tribunal3">
		<div id="imgTribunal3">
		<img src="tribunal3.png"></img>
		</div>
		<div id="texteTribunal3">
			<h1> Tribunal 3 </h1>
			<p> gklkdgjgjdlkfj </p>
		</div>
	</article>
	<article class="tribunal4">
		<div id="imgTribunal4">
		<img src="tribunal4.png"></img>
		</div>
		<div id="texteTribunal4">
			<h1> Tribunal 4 </h1>
			<p> gklkdgjgjdlkfj </p>
		</div>
	</article> 
	</section>
</main>
<main class="nosActualites">
	
	<h1>Nos actualités</h1>
	<section class="sectionActualites">
	<article class="actualitedujour">
		<div id="imageactualite">
		<img src="imageactualite.png" alt=""></img>
		</div>
		<div id="titreActualite>
		<h1> titre </h2>
		</div>
	</article>
	<article class="descriptionActualite">
		<div id="description">
		<p> lkgnlknrgrlgkjr</p>
		</div>
	</article>
	</section>
</main>
<main id="vosdroits">
	
	<h1> Vos droits </h1>
	<section id="liens">
	<a href=""> lien1 </a>
	<a href=""> lien2 </a>
	<a href=""> lien3 </a>
	</section>

</main>
		
		
		
		
		
	
	
</div>
HTML;

echo($html);
require("include/footer.html");