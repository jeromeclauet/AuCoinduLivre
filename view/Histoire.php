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
        <div class="main-history">
            <div class="container">
                <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                <img src="../Assets/Image/Les Pourquoi de l'Histoire 1.jpg" width="70%" >
                </div>
                <div class="booktext col-lg-8 col_md_12">
                    <h2>Les pourquoi de l'Histoire 1</h2>
                <p>
                <br>Nous allons nous attaquer à un monument de la mémoire culturelle et historique française, je nomme Mr Stéphane Bern, avec sa série de livre « Les Pourquoi de L’Histoire ».
                <br>Pour les grotteux du fond, Stéphane Bern est avant tout un passionné des familles royales et régnantes en Europe, ce qui lui a permis de pouvoir faire son émission télévisuel « Secrets d’Histoire », c’est d’ailleurs grâce à cette émission que j’ai découvert Mr Bern.
                </p>
                <a href="../view/Les Pourquoi de l'Histoire.php">En voir plus...</a>
            </div>
                </div>
            </div>
            <div class="container">
            <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                    <img src="../Assets/Image/Les Pourquoi de l'Histoire 2.jpg" width="70%">
                </div>
                <div class="booktext col-lg-8 col_md_12">
                <h2>Les pourquoi de l'Histoire 2</h2>
                <p>
                <br>Voici le deuxième résumé de la série de livre des pourquoi de l’Histoire, encore imprimé aux éditions Albin Michel.
                <br>Toujours écrit par Stéphane Bern, ce deuxième volume des pourquoi de l’Histoire garde la même recette qui pour moi a fait le succès du premier volume, c’est-à-dire expliquer au lecteur en une voire deux pages la réponse à une question donnée.
                </p>
                <a href="../view/Les Pourquoi de l'Histoire 2.php">En voir plus...</a>
                </div>
            </div>
            </div>
            <div class="container">
            <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                    <img src="../Assets/Image/Les Pourquoi de l'Histoire 3.jpg" width="70%">
                </div>
                <div class="booktext col-lg-8 col_md_12">
                <h2>Les pourquoi de l'Histoire 3</h2>
                <p>
                <br>Voici le deuxième résumé de la série de livre des pourquoi de l’Histoire, encore imprimé aux éditions Albin Michel.
                <br>Toujours écrit par Stéphane Bern, ce troisième volume des pourquoi de l’Histoire garde la même recette qui pour moi a fait le succès du premier et du deuxième volume, c’est-à-dire expliquer au lecteur en une voire deux pages la réponse à une question donnée.
                </p>
                <a href="../view/Les Pourquoi de l'Histoire 3.php">En voir plus...</a>
                </div>
            </div>
            </div>
            <div class="container">
            <div class="booklist d-flex flex-wrap text-center">
                <div class="col-lg-4 col-md-12">
                    <img src="../Assets/Image/Les Pourquoi de l'Histoire 4.jpg" width="70%">
                </div>
                <div class="booktext col-lg-8 col_md_12">
                <h2>Les pourquoi de l'Histoire 4</h2>
                <p>
                <br>Voici le deuxième résumé de la série de livre des pourquoi de l’Histoire, encore imprimé aux éditions Albin Michel.
                <br>Toujours écrit par Stéphane Bern, ce quatrième et dernier volume des pourquoi de l’Histoire garde la même recette qui pour moi a fait le succès des trois premiers volumes, c’est-à-dire expliquer au lecteur en une voire deux pages la réponse à une question donnée.
                </p>
                <a href="../view/Les Pourquoi de l'Histoire 4.php">En voir plus...</a>
                </div>
            </div>
            </div>
            <div class="bookpage text-center">
                <a href="Histoire.php" style="color:black;">< 1-</a><a href="Histoire-2.php" style="color:black;">2 ></a>
            </div> 
        </div>
        <?php include '../php_page/Footer.php' ?>