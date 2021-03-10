<?php

$title = "Ajout actualité";
require("include/header.php");
if(!isset($_SESSION['idm']) or !isset($_SESSION['nom']) or !isset($_SESSION['prenom']) or !isset($_SESSION['email']))
{
	header("Location:index.php");
}

$html = <<<HTML
		<div id="container">
			<h1>Ajout d'une actualité</h1>
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Nom de l'actualité</label>
					<input type="text" name="titre" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Vignette de l'actualité</label>
					<input type="file" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Contenu HTML de l'actualité</label>
					<textarea id="mytextarea" name="mytextarea"></textarea>
				</div>

				<input class="submit" type="submit" name="ajouter" value="Ajouter l'actualité"><br>
			</form>
		</div>
HTML;

if(isset($_REQUEST['ajouter']))
{
	include('config/bdd.php');
	include('config/outils.php');
	$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);				
	$titre=nettoyage($lien,$_REQUEST['titre']);
	$contenu=nettoyage($lien,$_REQUEST['contenu']);
	$date=date("Y-m-d H:i:s");
	$extensionsvalides=array('gif','jpg','png','jpeg','svg');
	$extension=strtolower(substr(strrchr($_FILES['image']['name'],"."),1));
if(in_array($extension, $extensionsvalides))
{
$destination="./images/".uniqid().".$extension";
$envoi=move_uploaded_file($_FILES['image']['tmp_name'],$destination);
if(!$envoi)
{
	echo "Erreur de transfert<br>";
	$destination="";
}
}
else
{
	echo "Pas d'image ou image invalide<br>";
	$destination="";
}
$req="INSERT INTO actus VALUES(NULL,'$titre','$contenu','$destination','$date')";
$res=mysqli_query($lien,$req);

if(!$res)
{
	echo "Erreur SQL: $req<br>".mysqli_error($lien);
}
else
{
	echo "Actualité ajoutée<br>";
}

mysqli_close($lien);
}
echo($html);
?>
	</body>
</html>