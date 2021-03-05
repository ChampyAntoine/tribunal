<?php
$title = "Site de L'arquebuse";
require("include/header.php");
$html = <<<HTML

<main>
	<div id="tribunaux">
		<h2>Site de l'Arquebuse (aux côtés du CPH)</h2>
		<section class="section-tribunaux">
			<article class="tribunal">
				<div class="img-tribunal">
					<img src="tribunal3.png">
				</div>
				<div id="texte-tribunal">
					<h4>Pôle économique et social</h4>
					<p>Le site de l'Arquebuse prosose 3 services:<p>
					<p>Le tribunale de commerce règle les litiges entre particuliers et commerçants ou entre commercants et sociétés commerciales. Les conflits qui porte sur le commerce entre les entreprises, mais aussi entre les personnes.</p>
					<p>Le Conseil de Prud'homme s'occupe des litiges qui naissent généralement entre employé et employeur.</p>
					<p>La proccédure cillective place sous contrôle judiciaire le fonctionnement d'une entreprise en difficulté.</p>
				</div>
			</article>
			<article class="tribunal">
				
				<div id="coordonnees-tribunal">
					<h3>Contact</h3>
					<p>20 Rue de l'Arquebuse, 08000 Charleville-Mézières, France</p>
					<p>+33324598888</p>
				</div>
				<div class="img-tribunal">
					<img src="tribunal2.png">
				</div>
			</article>
			
<main>
HTML;

echo($html);
require("include/footer.html");