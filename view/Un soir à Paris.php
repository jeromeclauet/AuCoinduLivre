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
<div class="main-romans">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src='../Assets/Image/Un soir à paris.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Poche : 352 pages</ol>
            <ol>Editeur : Le Livre de Poche</ol>
            <ol>Date de Sortie : 31 Janvier 2018</ol>
            <ol>Collection : Littérature</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Un soir à Paris</h2>
            <br>Il était une fois le cinéma Paradis…
            <br>Alain Bonnard, jeune propriétaire d'un cinéma, se décide à inviter une jeune inconnue, Mélanie, qui assiste chaque mercredi à la dernière séance. Deux jours plus tard, un célèbre réalisateur annonce au jeune homme qu'il désire tourner son prochain film dans le cinéma. Alain pense que la chance lui sourit.
            Deux choses m'étonnent toujours chez Nicolas Barreau. Tout d'abord, c'est le plus français des auteurs allemands. Jamais je n'aurais cru, en lisant un de ses livres pour la première fois, que cet auteur n'était pas français. Aussi bien ses intrigues que ses phrasés sentent bons la France tout au long de ses ouvrages... Et pourtant, même s'il nous entraîne, dans un soir à Paris, à travers la capitale française, soulignant de ci de là ses merveilles architecturales comme ce fabuleux pont Alexandre III, Nicolas Barreau a bien rédigé l'original dans la langue de Goethe.
            Ensuite, je reste toujours admirative devant les auteurs masculins qui parviennent à me faire rêver grâce à de belles histoires d'amour, toute en finesse et légèreté. Un soir à Paris ne fait pas exception. C'est avec beaucoup de joie que l'on découvre les premiers pas amoureux d'Alain et Mélanie; c'est avec un pincement au cœur qu'on réalise, avec Alain, qu'il l'a peut-être perdue et c'est avec beaucoup d'espoir qu'on croise le doigts pour qu'il la retrouve.
            Et sachant que l'auteur aime à jouer avec les coïncidences dans ses romans, on n'est pas surpris d'être baladé dans l'ouvrage comme le héros se balade dans Paris. Enfin, le cœur de l'histoire se situe dans un petit cinéma d'art et d'essai de quartier, c'est donc aussi l'occasion pour Nicolas Barreau de faire un clin d'œil à Woody Allen et de nous rappeler quelques grands noms du 7e art.
            Vous l'aurez compris, Un soir à Paris est fait pour les amoureux; les amoureux de Paris, les amoureux de belles histoires, les amoureux du cinéma... les amoureux tout court.
        </p>
        <p class="postDate">Posté le 10 Juillet 2020</p>
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