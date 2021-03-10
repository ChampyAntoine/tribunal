<?php
	session_start();
	if(!isset($_SESSION['idm']) or !isset($_SESSION['nom']) or !isset($_SESSION['prenom']) or !isset($_SESSION['email']))
	{
		header("index.php");
		exit;
	}
	else
	{
		include('bdd.php');
		include('outils.php');
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
			$tableau=mysqli_fetch_array($res);
			if(($tableau['auteur']!=$_SESSION['idm'])and($_SESSION['admin']==0))
			{
				mysqli_close($lien);
				header("Location:index.php");
				exit;
			}
			if($tableau['image']!="")
			{
				unlink($tableau['image']);//suppression d'un fichier en ligne
			}
		}
		
		$req="DELETE FROM actus WHERE ida=$num";
		$res=mysqli_query($lien,$req);	
		if(!$res)
		{
			echo "Erreur SQL: $req<br>".mysqli_error($lien);
		}
		else
		{
			mysqli_close($lien);
			header("Location:index.php");
		}
	}
?>