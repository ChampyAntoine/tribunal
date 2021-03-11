<?php
$title = "Inscrivez vous";
require("include/header.php");
$html = <<<HTML
		<div id="container">
			<h1>Inscription</h1>
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Nom</label>
					<input type="text" name="nom" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Prénom</label>
					<input type="text" name="prenom" class="form-control">
				</div>

				<div class="form-group">
					<label for="">E-mail</label>
					<input type="email" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Mot de passe</label>
					<input type="password" name="mdp1" class="form-control">
				</div>

				<!-- <div class="form-group">
					<label for="">Confirmation</label>
					<input type="password" name="mdp2" class="form-control">
				</div> -->

				<input class="submit" type="submit" name="inscription" value="Inscription">
			</form>
			<p>Déjà membre ?</p>
			<a href="m-connexion.php">Connectez vous</a>
		</div>
HTML;	

if(isset($_REQUEST['inscription']))
{
	include('config/bdd.php');
	include('config/outils.php');
	$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
	$nom=nettoyage($lien,$_REQUEST['nom']);
	$prenom=nettoyage($lien,$_REQUEST['prenom']);
	$email=nettoyage($lien,$_REQUEST['email']);
	$mdp1=md5($_REQUEST['mdp1']);
	
	if($mdp1 != "")
	{
		$req="SELECT * FROM membres WHERE email='$email'";
		$res=mysqli_query($lien,$req);
		if(!$res)
		{
			echo "Erreur SQL: $req<br>".mysqli_error($lien);
		}
		else
		{
			$nb=mysqli_num_rows($res);
			if($nb==0)
			{
				$req="INSERT INTO membres VALUES(NULL,'$email','$nom','$prenom','$mdp1',0)";
				$res=mysqli_query($lien,$req);
				if(!$res)
				{
					echo "Erreur SQL: $req".mysqli_error($lien);
				}
				else
				{
					echo "Inscription réussie";
					header("Location:m-connexion.php");
				}
			}
			else 
			{
				echo "Adresse email déjà utilisée";
			}
		}	
	}
	else
	{
		echo "Les mots de passe sont différents";
	}
	mysqli_close($lien);
}
echo($html);
require("include/footer.php");
?>			
	</body>
</html>