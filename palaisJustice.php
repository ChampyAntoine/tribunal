<?php
$title = "Palais de Justice";
require("include/header.php");
$html = <<<HTML

<main>
	<div id="tribunaux" class="div">
		<h2>Palais de Justice (Site Esplanade)</h2>
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
			<section class="section">
			<article class="art">
			<div class="texte-tri">
					<h3>Contact</h3>
					<p>9 Espl. du Palais de Justice, 08000 Charleville-Mézières, France.</p>
					<p>+33324576900</p>
				</div>
				<div class="img-art">
					<img src="./src/image/carte-palais_de_justice.png">
				</div>

			</article>
			</section>
			</div>
<main>
HTML;

echo($html);
require("include/footer.html");