<?php

require('config/bdd.php');
require('config/outils.php');
			
$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
$num=nettoyage($lien,$_REQUEST['num']);
$req="SELECT * FROM actus WHERE ida=$num";
$res=mysqli_query($lien,$req);

if(!$res)
{
	echo "Erreur SQL: $req<br>".mysqli_error($lien);
}
else
{
	$tableau=mysqli_fetch_assoc($res);
	$title = $tableau['titre'];
	require("include/header.php");
	echo("<div class='actu-detail'><div class='div'>");
	$tableau['contenu'] = html_entity_decode($tableau['contenu']);
	echo ($tableau['contenu']);
	echo("</div></div>");
}

mysqli_close($lien);
require("include/footer.php");
?>

	</body>
</html>			