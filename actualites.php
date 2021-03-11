<?php
$title = "Actualités";
$cheminImg = "src/image/DSCN0002_1_NRW_embedded.jpg";

require("include/header.php");
require("include/carousel.php");
$html = <<<HTML

<main>
	<div class="div">
		<h2>Nos actualités</h2>
		<section class="section">
HTML;

include('config/bdd.php');
include('config/outils.php');			
$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
$req="SELECT * FROM actus ORDER BY date DESC";
$res=mysqli_query($lien,$req);
if(!$res) {
	echo "Erreur SQL: $req<br>".mysqli_error($lien);
}
else {
	while($tableau=mysqli_fetch_assoc($res))
	{
	$html .="<a class='lien-a' href='actu-detail.php?num=".$tableau['ida']."'><article class='art'>";
	$html .= "<div class='img-art'><img src='".$tableau['image']."'></div>";
	$html .= "<div class='texte-art'><h3>".$tableau['titre']."</h3></div>";
	$html .= "</article></a>";
	}
}
mysqli_close($lien);

$html .= <<<HTML
		</section>
	</div>
</main>
HTML;

echo($html);
require("include/footer.php");