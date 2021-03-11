<?php
$title="Modif actu";
require("include/header.php");

if(!isset($_SESSION['idm']) or !isset($_SESSION['nom']) or !isset($_SESSION['prenom']) or !isset($_SESSION['email']))
{
	header("Location:index.php");
}

include('config/bdd.php');				
include('config/outils.php');
$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
$num=nettoyage($lien,$_REQUEST['num']);
if(isset($_REQUEST['modifier']))
{
$titre=nettoyage($lien,$_REQUEST['titre']);
$contenu=nettoyage($lien,$_REQUEST['mytextarea']);
if($_FILES['image']['name']=="")
{
	$req="UPDATE actus SET titre='$titre', contenu='$contenu' WHERE ida=$num";
}
else
{
	$extensionsvalides=array('gif','jpg','png','jpeg','svg');
	$extension=strtolower(substr(strrchr($_FILES['image']['name'],"."),1));
	if(in_array($extension, $extensionsvalides))
	{
		$destination="images/".uniqid().".$extension";
		$envoi=move_uploaded_file($_FILES['image']['tmp_name'],$destination);
		if(!$envoi)
		{
			echo "Erreur de transfert";
			$destination="";
		}
	}
	else
	{
		echo "Pas d'image ou image invalide";
		$destination="";
	}
	if($destination=="")
	{
		$req="UPDATE actus SET titre='$titre', contenu='$contenu' WHERE ida=$num";
	}
	else
	{
		$req="UPDATE actus SET titre='$titre', contenu='$contenu', image='$destination' WHERE ida=$num";
	}
}
$res=mysqli_query($lien,$req);
if(!$res)
{
	echo "Erreur SQL: $req<br>".mysqli_error($lien);
	unlink($destination);
}
else
{
	echo "Actualité modifiée<br>";
	if(($_REQUEST['ancienneimage']!="")and($_FILES['image']['name']!=""))
	{
		unlink($_REQUEST['ancienneimage']);
	}
}
}
$req="SELECT * FROM actus WHERE ida=$num";
$res=mysqli_query($lien,$req);
if(!$res)
{
	echo "Erreur SQL: $req<br>".mysqli_error($lien);
}
else
{
	$tableau=mysqli_fetch_array($res);
	if($_SESSION['admin']==0)
	{
		mysqli_close($lien);
		header("Location:index.php");
		exit;
	}
?>
<div class="container">
	<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Nom de l'actualité</label>
		<input type="text" name="titre" value="<?php echo $tableau['titre'];?>">
	</div>
	<div class="form-group">
		<label for="">Contenu de l'actualité</label>
		<textarea id="mytextarea" class="form-control" name="mytextarea"><?php echo $tableau['contenu'];?></textarea>
	</div>
	<div class="form-group">
		<label for="">Vignette actuelle</label>
		<img style="width:400px ;" src="<?php echo $tableau['image'];?>">
	</div>
	<div class="form-group">
		<label for="">Nouvelle vignette</label>
		<input type="file" name="image">
	</div>
		<input type="hidden" name="num" value="<?php echo $num;?>">
		<input type="hidden" name="ancienneimage" value="<?php echo $tableau['image'];?>">
		<input type="submit" name="modifier" value="Modifier l'actualité"><br>
	</form>
<?php
}
mysqli_close($lien);
require("include/footer.php");
?>
	</body>
</html>	