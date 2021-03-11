<?php
$title = "Site de L'arquebuse";
require("include/header.php");
$html = <<<HTML

<main>
	<div id="tribunaux" class="div">
		<h2 class="h2">Site de l'Arquebuse (aux côtés du CPH)</h2>
		<section class="section">
			<article class="art">
				<div class="img-art">
					<img src="./src/image/DSC_0041.JPG">
				</div>
				</section>
				<section class="section">
				<div class="texte-tri">
					<h4>Pôle économique et social</h4>
					<p>Le site de l'Arquebuse prosose 3 services:<p>
					<p>Le tribunale de commerce règle les litiges entre particuliers et commerçants ou entre commercants et sociétés commerciales. Les conflits qui porte sur le commerce entre les entreprises, mais aussi entre les personnes.</p>
					<p>Le Conseil de Prud'homme s'occupe des litiges qui naissent généralement entre employé et employeur.</p>
					<p>La proccédure cillective place sous contrôle judiciaire le fonctionnement d'une entreprise en difficulté.</p>
				</div>
			</article>
			</section>
			
			<article class="tribunal">
				<section class="section">
				<div class="texte-tri">
					<h3>Contact</h3>
					<p>20 Rue de l'Arquebuse, 08000 Charleville-Mézières, France</p>
					<p>+33324598888</p>
				</div>
				</section>
				<section class="section">
				<div class="img-art">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.7977883604885!2d4.719476565384348!3d49.77106057938735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e08d99a36cd%3A0x8a426edd745ff84f!2sConseil%20des%20Prud&#39;Hommes!5e0!3m2!1sfr!2sfr!4v1615380781042!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</section>
		</article>
			
</main>
HTML;

echo($html);
require("include/footer.php");