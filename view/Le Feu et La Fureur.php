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
        <meta name="viewport" content="width=device-width" />
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
        <img src='../Assets/Image/Le Feu et La Fureur.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 418 pages</ol>
            <ol>Editeur : Laffont</ol>
            <ol>Date de Sortie : 22 Février 2018</ol>
            <ol>Collection : /</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Le Feu et la Fureur</h2>
            <br>Alors commençons par le début, ce livre : Je ne l’ai pas apprécié. Fin de l’avis ! 
            Non je rigole. Mais une chose est vraie dans la phrase ci-dessus. Je n’ai pas aimé la lecture de ce livre.
            Nous sommes face à un ouvrage sur la première année de mandat de Donald Trump, ok !
            Nous sommes pas face au président le plus réfléchis qui soit non plus ! Mais ce livre écrit par un journaliste ouvertement démocrate contre un président républicain est assez habituel, surtout aux Etats-Unis.  Mais toujours est il que même si le livre a failli ne jamais ne sortir en librairie, cet ouvrage n’est pas bon à mes yeux.
            Pourquoi je trouve ce livre pas aussi bon que je l’espérais ? Tout simplement que nous apprenons que Trump est un idiot fini, cool ! Mais nous le savions déjà avant son élection en réalité. Et aujourd’hui nous pouvons le dire avec un certains recul car à l’heure où j’écris ces lignes, nous sommes à la fin du mandat de Trump.
            Et je pense surtout que ce livre voulait surfer sur la vague du : « OUIN-OUIN, Donald Trump va mener le pays à sa propre perte ! » Mais on peut constater que 4 années plus tard, le pays est à feu et à sang mais pas à cause de Trump ou de sa politique mais à cause des démocrates.
            Alors oui, l’ouvrage montre que Trump est un idiot entouré de clowns faisant de la figuration.
            L’auteur nous mets face à une question que je trouve absolument non essentiel à la bonne lecture du livre : « Est-ce que Trump est en capacité de gouverner, en sachant tout ce qu’il se passe à la Maison Blanche ? ». 
            Encore une fois, je vais revenir à ce que j’ai dis plus haut. Trump a redressé les Etats-Unis ! Au prix de de réforme impopulaire au possible, la destruction de l’Obama-Care ( assurance maladie pour tout le monde). Même les soucis de racisme et de discrimination ont en partie été atténué durant son mandat. 
            Je ne recommanderai pas ce livre, car même si nous disposons de plus de deux cents témoignages, la plupart sont fait charges sur le Président et son équipe, donc si il n’y a pas de preuves, c’est toujours plus compliqué de croire un journaliste et encore plus quand celui-ci fait partie de l’opposition.
            </p>
        <p class="postDate">Posté le 25 Juillet 2020</p>
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