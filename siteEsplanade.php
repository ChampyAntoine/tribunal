<?php
$title = "Palais de Justice";
require("include/header.php");
$html = <<<HTML
<div class="container">
<main>
	<div id="tribunaux" class="div">
		<h2 class="h2">Palais de Justice (Site Esplanade)</h2>
		<section class="section">
			<article class="art">
				<div class="img-art">
					<img src="./src/image/DSC_0030.JPG">
				</div>
				</section>
				<section class="section">
				<div class="texte-tri">
					<h3>Aile Nord</h3>
					<h4>Pôle famille</h4>
					<p>Le palais de justice occupe le pôle famille avec le Juge des affaires
					familiales. Celui-ci s'occupe principalement des divorces, des pensions familiales et de l'autorité parentale. Vous retrouverez le juge des Affaires Familiale au premier étage et sous-sol. De plus, le pôle famille possède le juge des enfants qui
					est un magistrat spécialisé dans les problèmes de l'enfance en pénal au tribunal judiciaire. Il intervient en matière civile lorsqu'il est dit qu'un mineur est en dander, ou que sa santé, sa sécurité ou sa moralitée est menacée ou que les conditions de son éducation semble gravement compromises. Vous retrouverez ce service au Res de chaussée. </p>
					<h3>Aile Est</h3>
					<h4>Pôle pénal</h4>
					<p>Le palais de justice propose 4 services au niveau pénal. Dans un premier il propose avec le Juge d'instruction chargé ces enquêtes judiciaires dans les affaires pénales les plus graves ou les plus complexes, deux missions: Procéder impartialement à la manifestation de la vérité et prendre certaines décisions juridicionnelles. Vous le trouverez au deuxième étage.</p>
					<p> Dans un second temps, le palais de justice propose les services parquet autorité chargé de défendre l'intérêt de la collectivité et l'application de la loi devant les juridictions. Vous le trouverez au premier étage.</p>
					<p> Dans un troisième temps, vous trouverez le Juge des Libertés et de la Détention au Res de chaussée qui va statuer sur une mise en détention provisoire d'une personne mise en examen ou sa demande de mise en liberté.</p>
					<p>Enfin, vous trouverez le Juge de l'applicatoin des peines au Rez de chaussée qui opère un suivi des condamnés à l'intérieur et à l'extérieur de la prison.</p>
				</div>
			</article>
			</section>
			
			<article class="tribunal">
			<section class="section">
			<div class="texte-tri">
					<h3>Contact</h3>
					<p>9 Espl. du Palais de Justice, 08000 Charleville-Mézières, France.</p>
					<p>+33324576900</p>
				</div>
				</section>
				<section class="section">
				<div class="img-art">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10309.298502760916!2d4.713388169775388!3d49.7611503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e01ab87143f%3A0x4d49c0c7a6f4b7ef!2sTribunal%20Judiciaire!5e0!3m2!1sfr!2sfr!4v1615377990062!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</section>
		</article>
			
</main>
HTML;

echo($html);
require("include/footer.php");