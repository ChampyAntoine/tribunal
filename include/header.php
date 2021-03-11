<?php
$html = <<<HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/modern-normalize.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/style-bdd.css">
    <link rel="stylesheet" href="./css/actu.css">
    <script src="https://cdn.tiny.cloud/1/r5tnbfjt6hc8uafwbzzesoprbw9sjibntt2x18qoloeib2uv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    
    <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
    <title>$title</title>
</head>
<script>
            var height = window.innerHeight;
            var header = document.querySelector("header");
            var previousScroll = height;

            function scroll() {
                if (previousScroll > window.scrollY) {
                    header.classList.remove('hidden');
                } else if (window.scrollY > 150) {
                    header.classList.add('hidden');
                }
                previousScroll = window.scrollY;
            }
            
            window.onscroll = document.ontouchmove = scroll; 
        </script>
<body>
    <div class="container">
        <header>
HTML;

session_start();
if(!isset($_SESSION['idm']) or !isset($_SESSION['nom']) or !isset($_SESSION['prenom']) or !isset($_SESSION['email']))
{
    $connecte=false;
}
else
{
    $connecte=true;
}
$html.= <<<HTML
    <div class="nav-adm">
        <ul class="ul-adm">
HTML;
if(($connecte==true))
	{
    if($_SESSION['admin']==1){
        $html.= <<<HTML
                <a href="actu-ajout.php">
                    <li class="li-adm">
                        Ajout actualité
                    </li>
                </a>
                <a href="actu-modif.php">
                    <li class="li-adm">
                        Gestion actualités
                    </li>
                </a>
        HTML;
    }
    $html.= "<a href='m-deconnexion.php'><li class='li-adm'>deconnexion</li></a>";

}
else
{
    $html.= <<<HTML
            <a href="m-inscription.php">
                <li class="li-adm">
                    Inscription
                </li>
            </a>
            <a href="m-connexion.php">
                <li class="li-adm">
                    Connexion
                </li>
            </a>
HTML;
}
$html.= <<<HTML
            </ul>
        </div>
        <div class="bar">
            <div class="logo">
                <img src="./src/image/logo.png" alt="" class="img-logo">
            </div>
            <nav>
                <ul>
                    
                    <a href="index.php"><li>Accueil</li></a>
                    
                    <a href="index.php#tribunaux"><li>Tribunaux</li></a>
                
                    <a href="partenaires.php"><li>Partenaires de justice</li></a>
                    
                    <a href="actualites.php"><li>Nos actualités</li></a>
                
                    <a href="index.php#vosdroits"><li>Vos droits</li></a>

                </ul>
            </nav>
        </div>
    </header>

HTML;
echo($html);