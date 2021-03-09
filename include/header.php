<?php
$html = <<<HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modern-normalize.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>$title</title>
</head>
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

if(($connecte==true)and($_SESSION['admin']==1))
	{
    $html.= <<<HTML
                <div class="nav-adm">
                <ul class="ul-adm">
                    <a href="../actus/ajout-actus.php">
                        <li class="li-adm">
                            Ajout actualité
                        </li>
                    </a>
                    <a href="gest-actu.php">
                        <li class="li-adm">
                            Gestion actualités
                        </li>
                    </a>
                </ul>
            </div>
HTML;
}
else 
{
    $html.= <<<HTML
    <div class="nav-adm">
        <ul class="ul-adm">
            <a href="./membres/inscription.php">
                <li class="li-adm">
                    Inscription
                </li>
            </a>
            <a href="login.php">
                <li class="li-adm">
                    Login
                </li>
            </a>
        </ul>
    </div>
HTML;
}
$html.= <<<HTML
            <div>
                <div class="logo">
                    <img src="./src/image/logo.png" alt="" class="img-logo">
                </div>
                <nav>
                    <ul>
                        
                        <a href="index.php"><li>Accueil</li></a>
                        
                        <a href="index.php#tribunaux"><li>Tribunaux</li></a>
                    
                        <a href="partenaires.php"><li>Partenaires de justice</li></a>
                        
                        <a href="actualites.php"><li>Nos actualités</li></a>
                    
                        <a href="#vosdroits"><li>Vos droits</li></a>
                    
                    </ul>
                </nav>
            </div>
            
            <div class="carousel">
                <img id="img-carousel" src="./src/image/carrousel.JPG" alt="" >
            </div>
        </header>

HTML;
echo($html);