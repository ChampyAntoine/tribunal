<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Actualité</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<?php
			include('../config/bdd.php');
			include('../config/outils.php');			
			$lien=mysqli_connect(SERVEUR,LOGIN,"",BASE);
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
				echo "<p>".$tableau['contenu']."</p>";
			}
			
			mysqli_close($lien);
		?>
	</body>
</html>			