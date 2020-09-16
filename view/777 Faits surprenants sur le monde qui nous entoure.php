<?php 
session_start();
include '../models/books.php';
include '../models/authors.php';
include '../models/articles.php';
include_once '../models/comments.php';
include_once '../controllers/commentsCtrl.php';
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
        <img src="../Assets/Image/777 Faits Surprenants sur le monde qui nous entoure.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 288 pages</ol>
            <ol>Editeur : First</ol>
            <ol>Date de Sortie : 5 Octobre 2017</ol>
            <ol>Collection : /</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>777 Fiats Surprenants sur le monde qui nous entoure</h2>
            <br>Aujourd’hui, je vais vous parler d’un Youtubeur dont je suis fan et que vous connaissez sûrement sa chaîne. Je vais parler de Doc Seven !
            777 faits surprenants sur le monde qui nous entoure est un livre donc, de Doc Seven, imprimé par la maison d’édition First Edition.
            Dans ce livre, le Doc nous invite au voyage, à la découverte d’autres culture, d’histoire.
            Je pourrais vous dire que l’Indonésie est le pays qui compte le plus d’îles au monde, avec plus de 13000 îles dénombrés ou je pourrais vous raconter l’histoire de ce soldat américain, qui durant la guerre du Vietnam à rampé durant 4 jours et 3 nuits afin de tuer un officier de haut rang ennemis, et qu’il lui aurait fallu trois jours de plus pour faire le chemin inverse.
            Voilà ce qu’est ce livre, une découverte permanente de notre monde, de son histoire.
            Avec ce livre vous pourrez impressionner qui vous voulez lors de vos soirées avec votre culture générale que vous aurez acquise grâce à ce bouquin.
            Je vous invite d’ailleurs, à faire un tour sur la chaîne Youtube du Doc et cela vous donnera encore plus envie de voyager et de découvrir d’autres cultures ! D’ailleurs sa découverte de Malte me donne très envie d’y aller en vacances !
            Si vous êtes fan ou que vous soyez assoiffés de connaissances ce livre est fait pour vous !
            </p>
        <p class="postDate">Posté le 27 Juillet 2020</p>
        </div>
        </div>
    </div>
    <div> 
    <div class="main-comment">
        <div class="container">
    <fieldset class="ti text-center">Espace Commentaire : </fieldset>    
        <form action="#" method="POST">
            <div class="text-center">
                <label for="username">Pseudo :</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Votre Pseudo"/>
                    <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['username'])) { ?>
                <div class="text-danger"><?= $formErrors['username']?></div>
                   <?php }else{ ?>
                    <small id="username" class="form-text text-black">Merci de renseigner votre pseudo</small>
            <?php } ?>
                   </div>
            <div class="text-center">
                <label for="comment">Commentaire : </label>
                    <input type="textarea" class="form-control" name="comment" id="comment" placeholder="Votre commentaire..."></textarea>
                    <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['comment'])) { ?>
                <div class="text-danger"><?= $formErrors['comment']?></div>
                   <?php }else{ ?>
                    <small id="comment" class="form-text text-black">Merci de renseigner votre commentaire</small>
            <?php } ?>
                   </div>
                   <div class="bu text-center">
                   <button class="btn btn-warning" type="submit" name="addComments">Ajouter votre commentaire</button>      
                   </div>
                </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../php_page/Footer.php' ?>