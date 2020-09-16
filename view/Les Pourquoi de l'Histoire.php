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
<div class="main-history">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/Les Pourquoi de l'Histoire 1.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 288 pages</ol>
            <ol>Editeur : Albin Michel</ol>
            <ol>Date de Sortie : 28 Mai 2014</ol>
            <ol>Collection : A.M Histoire</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Les Pourquoi de l'Histoire 1</h2>
            <br>Nous allons nous attaquer à un monument de la mémoire culturelle et historique française, je nomme Mr Stéphane Bern, avec sa série de livre « Les Pourquoi de L’Histoire ».
            Pour les grotteux du fond, Stéphane Bern est avant tout un passionné des familles royales et régnantes en Europe, ce qui lui a permis de pouvoir faire son émission télévisuel « Secrets d’Histoire », c’est d’ailleurs grâce à cette émission que j’ai découvert Mr Bern.
            Me promenant dans les rayons du Cultura de chez moi, je promène mes yeux dans le rayon Histoire et je tombe sur ce livre dont je vais vous faire le résumé ! Je l’achète direct ! Du coup je stoppe là pour vous raconter ma vie !
            Je ne vous cache pas que je ne savais pas trop à quoi m’attendre en achetant ce bouquin, car je ne suis pas trop fan de la partie Moyen Âge de l’Histoire mais je fus très surpris de lire ce livre très facilement et simplement.
            Si tu veux savoir pourquoi on appelle le drapeau britannique l’Union Jack ou alors si tu veux savoir pourquoi notre cher drapeau national est-il composé des couleurs bleu-blanc-rouge….. Eh bien tu auras les réponses dans ce livre.
            D’ailleurs le format choisit par Bern permet de lire cela rapidement, en effet il explique et donne la réponse à la question en une voire deux pages, donc ce n’est pas très long pour avoir de la culture générale infinie ! 
            Je finirai ce premier avis de cette série de quatre livre pour le moment ^^, en vous disant, que si vous êtes curieux et si vous cherchez à en savoir plus sur la vie d’antan ou la vie royale au Moyen Âge, ce livre est fait pour toi ! Achète le et dévore le ! Amuse toi bien ! 
            </p>
        <p class="postDate">Posté le 28 Juillet 2020</p>
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