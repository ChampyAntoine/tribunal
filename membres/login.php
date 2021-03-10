<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Page de connexion</title>
		<link rel="stylesheet" href="./css/style-bdd.css">
	</head>
	<body>
		<div id="container">
			<h1>Page de connexion</h1>
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Mot de passe</label>
					<input type="password" name="mdp" class="form-control">
				</div>

				<input class="submit" type="submit" name="connexion" value="Connexion">
			</form>
			<a href="./index.php">Accueil</a>
		</div>
		<?php
			if(isset($_REQUEST['connexion']))
			{
				include('./config/bdd.php');
				include('./config/outils.php');
				$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
				$email=nettoyage($lien,$_REQUEST['email']);
				$mdp=md5($_REQUEST['mdp']);
				$req="SELECT * FROM membres WHERE email='$email' AND mdp1='$mdp'";
				$res=mysqli_query($lien,$req);
				if(!$res)
				{
					echo "Erreur SQL: $req<br>".mysqli_error($lien);
				}
				else
				{
					$nb=mysqli_num_rows($res);
					$tableau=mysqli_fetch_array($res);
					if(($nb==1)and($tableau['actif']==1))
					{
						session_start();
						$_SESSION['idm']=$tableau['idm'];
						$_SESSION['nom']=$tableau['nom'];
						$_SESSION['prenom']=$tableau['prenom'];
						$_SESSION['email']=$tableau['email'];
						$_SESSION['admin']=$tableau['admin'];
						mysqli_close($lien);
						header("Location: ./index.php");
					}
					else
					{
						echo "Informations incorrectes";
					}
				}
				mysqli_close($lien);
			}
		?>
	</body>
</html>		