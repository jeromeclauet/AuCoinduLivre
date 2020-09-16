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
        <img src="../Assets/Image/Le tour du monde des infos insolites.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 144 pages</ol>
            <ol>Editeur : First<ol>
            <ol>Date de Sortie : 13 Octobre 2016</ol>
            <ol>Collection : Hors Collection</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Le Tour du monde des infos insolites</h2>
            <br> On se retrouve pour un autre livre de l’un de mes Youtubeurs préférés, en la personne du Doc.
            Il s’agit cette fois ci, comme indiqué dans le titre, d’un tour du monde des infos insolites. Imprimé aux éditions First Edition, et petite chose importante à savoir, si vous achetez ce livre une partie des droits d’auteurs du Doc sera reversé à une association.
            Attaquons la trame principale du livre, c’est un bouquin de « Top ». En gros, pour les personnes non familières de la chaîne Youtube de DocSeven, des tops sont des classements subjectif fait par le Doc.
            Donc pour revenir à nos moutons, dans ce livre vous trouverez un classement des « Faux documents historiques incroyables », qui contient des informations sur les faux carnets d’Hitler ou l’Opération Mincemeat dont je ne vous raconterez pas l’histoire ici, car il faut acheter le livre 😉 !
            Un autre classement, des « Pires poisons au monde » au cas où vous voulez tuer quelqu’un.
            Non !! Je rigole, ne le faites pas !
            Ce livre est écrit avec un vocabulaire très simple et compréhensible pour la plus grande partie des gens, et cela fait mouche surtout si vous vous intéressez à beaucoup de sujet sans être expert dans les domaines concernés.
            Le Doc veut avec ce livre nous faire découvrir le monde avec plus d’infos incroyables ! Et cela marche à fond ! J’aurai presque envie d’aller visiter la ville de Bodie ! 
            Alors si vous aimez découvrir des choses que vous ne connaissiez pas, FONCEZ ! Et en plus, vous allez faire une bonne action !
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