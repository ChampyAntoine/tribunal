<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="../css/style-bdd.css">
		<script src=""></script>
	</head>
	<body>
	<div id="container">
		<h1>Inscription</h1>
		<div id="form">
		<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			Nom: <input type="text" name="nom" class="form-control">
		</div>
		<div class="form-group">
			Prénom: <input type="text" name="prenom" class="form-control">
				</div>

		<div class="form-group">
			Email: <input type="email" name="email" class="form-control">
					</div>

		<div class="form-group">
			Mot de passe: <input type="password" name="mdp1" class="form-control">
				</div>

		<div class="form-group">
			Confirmation: <input type="password" name="mdp2" class="form-control">
				</div>

			<input class="submit" type="submit" name="inscription" value="Inscription">
			</form>
		</div>
	</div>	
		<?php
			if(isset($_REQUEST['inscription']))
			{
				include('../config/bdd.php');
				include('../config/outils.php');
				$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
				$nom=nettoyage($lien,$_REQUEST['nom']);
				$prenom=nettoyage($lien,$_REQUEST['prenom']);
				$email=nettoyage($lien,$_REQUEST['email']);
				$mdp1=md5($_REQUEST['mdp1']);
				$mdp2=md5($_REQUEST['mdp2']);
				
				if($mdp1==$mdp2)
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
							$req="INSERT INTO membres VALUES(NULL,'$email','$nom','$prenom','$mdp1',0,0)";
							$res=mysqli_query($lien,$req);
							if(!$res)
							{
								echo "Erreur SQL: $req<br>".mysqli_error($lien);
							}
							else
							{
								echo "Inscription réussie<br>";
							}
						}
						else 
						{
							echo "Adresse email déjà utilisée<br>";
						}
					}	
				}
				else
				{
					echo "Les mots de passe sont différents<br>";
				}
				mysqli_close($lien);
			}
		?>
		
	</body>
</html>