<?php 
session_start();
include '../models/books.php';
include '../models/articles.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au Coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale 1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/style.css" type="text/css" />
        <link rel="shorcut icon" type="image/logo" href="../Assets/Image/Logo 1.png" />
    </head>
<body>
    <?php include '../php_page/Header.php' ?>
        <div class="main-society">
            <div class="container">
                <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                <img src="../Assets/Image/Carnets de Guerre.jpg" width="70%" >
                </div>
                <div class="booktext col-lg-8 col_md_12">
                    <h2>Papacito : Carnets de Guerre</h2>
                <p>
                <br>Papacito…. Papacito que dire toi ?! Ah oui ! On est là pour parler de ton livre ! 
                Ton livre est édité par aux éditions RING et écrit par toi-même.
                <br>L’une des plus grosses burne d’Internet, après plusieurs vidéos sur Youtube via la chaîne RING, tu décides de publier ton livre et là, attention les yeux !
               </p>
                <a href="../view/Carnets de Guerre.php">En voir plus...</a>
            </div>
                </div>
            </div>
            <div class="container">
            <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                    <img src="../Assets/Image/Crépuscule des Titans.jpg" width="70%">
                </div>
                <div class="booktext col-lg-8 col_md_12">
                    <h2>Papacito : Crépuscule des Titans</h2>
                <p>
                <br>Avertissement : les événements historiques qui vont déferler sous vos yeux sont d'une violence à faire passer les vidéos de l'État islamique pour un épisode de Camping Paradis.
                <br>Le Moyen Âge n'est pas ce que l'histoire officielle en a fait à travers les siècles. L'Éducation nationale devait vous mentir et salir votre héritage. 
                <br>Il n'était pas acceptable que le Français métrosexuel moderne fasse résonner le souvenir trop lourd et puissant de l'homme absolu qu'il a été à la bataille de Muret, de Bouvines ou de Saint-Jean-d'Acre.
                </p>
                <a href="../view/Crépuscule des Titans.php">En voir plus...</a>
                </div>
            </div>
            </div>
            <div class="container">
            <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                    <img src="../Assets/Image/La France divisée contre elle-même.jpg" width="70%">
                </div>
                <div class="booktext col-lg-8 col_md_12">
                    <h2>La France divisée contre elle-même</h2>
                <p>
                <br>La France n’est pas seulement en déclin : elle est aussi en pleine décomposition.
                <br>Si sa puissance diminue, son essence s’altère à une vitesse plus grande encore.
                <br>Plusieurs siècles d’anthropocentrisme ont greffé en son sein une autre nation, qui la phagocyte et tente de se substituer à elle : l’Antifrance, autrement nommée République des Lumières.
                </p>
                <a href="../view/La France divisée contre elle-même.php">En voir plus...</a>
                </div>
            </div>
            </div>
            <div class="container">
            <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                    <img src="../Assets/Image/Le Feu et La Fureur.jpg" width="70%">
                </div>
                <div class="booktext col-lg-8 col_md_12">
                    <h2>Le Feu et la Fureur</h2>
                <p>
                <br>Alors commençons par le début, ce livre : Je ne l’ai pas apprécié. Fin de l’avis ! 
                <br>Non je rigole. Mais une chose est vraie dans la phrase ci-dessus. Je n’ai pas aimé la lecture de ce livre.
                <br>Nous sommes face à un ouvrage sur la première année de mandat de Donald Trump, ok !
                <br>Nous sommes pas face au président le plus réfléchis qui soit non plus ! 
                </p>
                <a href="../view/Le Feu et La Fureur.php">En voir plus...</a>
                </div>
            </div>
            </div>
            <div class="bookpage text-center">
                <a href="Société.php" style="color:black;">< 1-</a><a href="Société-2.php" style="color:black;">2 ></a>
            </div> 
        </div>
        <?php include '../php_page/Footer.php' ?>