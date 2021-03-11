<?php
$title = "Actualités";
$cheminImg = "src/image/carrousel2.jpg";

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
	$html .= "<div class='bloc'>";
	$html .= "<a class='lien-a' href='actu-detail.php?num=".$tableau['ida']."'><article class='art'>";
	$html .= "<div class='img-art'><img src='".$tableau['image']."'></div>";
	$html .= "<div class='texte-art'><h3>".$tableau['titre']."</h3></div>";
	$html .= "</article></a>";

	if(isset($_SESSION['idm'])){

		$html .= "<div class='modif-supp'>";
		$html .= "<a href='actu-modif.php?num=".$tableau['ida']."'><img src='https://img.icons8.com/dotty/50/000000/pencil-tip.png'/></a>";
		$html .= "<a href='actu-suppression.php?num=".$tableau['ida']."'><img src='https://img.icons8.com/wired/64/000000/trash.png'/></a></div>";	
	}

	$html .= "</div>";
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