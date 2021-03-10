<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./css/style-bdd.css">
	</head>
	<body>
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
		</div>	
			<?php
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