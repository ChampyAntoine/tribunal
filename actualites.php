<?php
$title = "Actualités";
require("include/header.php");
$html = <<<HTML

<main>
	<div class="div">
		<h2>Nos actualités</h2>
		<section class="section">
			<article class="art">
HTML;

include('../config/bdd.php');
include('../config/outils.php');			
$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
$num=nettoyage($lien,$_REQUEST['num']);
$req="SELECT * FROM actus WHERE ida=$num";
$res=mysqli_query($lien,$req);
if(!$res) {
	echo "Erreur SQL: $req<br>".mysqli_error($lien);
}
else {
	$tableau=mysqli_fetch_assoc($res);
	$html .= "<h1>".$tableau['nom']."</h1>";
	$html .= "<img src='".$tableau['image']."'>";
	$html .= "<p>".$tableau['date']."</p>";
}
mysqli_close($lien);

$html .= <<<HTML
			</article>
			<a href="./actus/details-actus.php">
				<article class="art">
					<div class="img-art">
						<img src="./src/image/nouvelle-organisation.png"">
					</div>
					<div class="texte-art">
						<h3>Une nouvelle organisation</h3>
					</div>
				</article>
			</a>
			
		</section>
	</div>
</main>

HTML;

echo($html);

require("include/footer.html");


/*<a href="./actus/details-actus.php">
				<article class="art">
					<div class="texte-art">
						<h4>Depuis le 1er janvier 2020, les 5 juridictions ont été ramenées à 3:</h4>
						<ul> 
							<li>
								le tribunal judiciaire ayant son siège à Charleville-Mézières,et doté d’une chambre de proximité à Sedan
							</li>
							<li>
								le conseil de prud’hommes à Charleville-Mézières
							</li>
							<li>
								le tribunal de commerce à Sedan.
							</li>
						</ul>
						<h4>3 sites sur Charleville-Mézières:</h4>
						<ul>
							<li>
								le site du « Palais de justice », propriété de l’État
							</li>
							<li>
								le site du « 12 rue Madame de Sévigné », propriété du département, et local de l’ancien TI
							</li>
							<li>
								le site du « 20 rue de l’Arquebuse », propriété de la commune, et local du conseil de prud’hommes.
							</li>
						</ul>
						<p>
							Le Palais de Justice est le chef des autres tribunaux
						</p>
						<h4>1 site sur Sedan:</h4>
						<ul>
							<li>le site du « 1 rue de la Comédie », propriété de la commune, et local de la chambre de proximité (ancien TI) comme du tribunal de commerce.
							</li>
						</ul>
					</div>
				</article>
			</a>
			*/