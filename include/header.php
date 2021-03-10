<?php
$html = <<<HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modern-normalize.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/style-bdd.css">
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
$html.= <<<HTML
    <div class="nav-adm">
        <ul class="ul-adm">
HTML;
if(($connecte==true))
	{
    if($_SESSION['admin']==1){
        $html.= <<<HTML
                <a href="./actus./ajout-actus.php">
                    <li class="li-adm">
                        Ajout actualité
                    </li>
                </a>
                <a href="./actus/modif-actus.php">
                    <li class="li-adm">
                        Gestion actualités
                    </li>
                </a>
        HTML;
    }
    $html.= "<a href='./membres/deconnexion.php'><li class='li-adm'>deconnexion</li></a>";

}
else
{
    $html.= <<<HTML
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
HTML;
}
$html.= <<<HTML
            </ul>
        </div>
        <div>
            <div class="logo">
                <img src="../src/image/logo.png" alt="" class="img-logo">
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
            <img id="img-carousel" src="../src/image/carrousel.JPG" alt="" >
        </div>
    </header>

HTML;
echo($html);