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
        <img src="../Assets/Image/Top 50 des Légendes de la NBA.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 372 pages</ol>
            <ol>Editeur : Talent Sport</ol>
            <ol>Date de Sortie : 10 Octobre 2018</ol>
            <ol>Collection : TED TALENT.SPORT</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Top 50 des Légendes de la NBA</h2>
            <br>Ce livre est imprimé par la maison d’édition « Talent Sport », connue pour leurs excellent livres sur Kobe Bryant ou Michael Jordan, notamment.
            Cet écrit démarre avec une préface de Mr GEORGE Eddy qui est le Monsieur NBA en France depuis les années 80 ! Il nous explique comment il définit une légende : les titres ou les stats ? A vous de décider !
            Rédigé par Julien Müller et Anthony Saliou tous deux passionnés de NBA, ils nous donnes leur classement des plus grandes légendes de la NBA.
            Ce classement totalement subjectif est assumé par les deux auteurs qui justifie leur choix pour chacun des joueurs en citant leurs moments les plus mythiques.
            Les exemples pour chaque joueurs sont presque infini, comme « The Shot » de Michael Jordan face aux Jazz d’Utah en finale NBA 1998. Le cross assassin d’Allen Iverson qui enjambe  Tyronn Lue après que ce dernier soit tombé sur les fesses du parquet du Staple Center de LA en 2001. Ou plus proche de nous, « The Block » de LeBron James face aux Golden State Warriors en finale NBA 2016.
            Le seul regret que je pourrais avoir concernant ce classement, c’est de ne pas voir Bill  « The Good Lord » Russel ou Larry « Legend » Bird apparaître plus haut. Fan des Celtics oblige ! 
            Ce livre est un excellent bouquin qui permet, aux plus jeunes de connaître des Légendes du jeu que seul les plus anciens d’entre nous ont eu la chance de voir jouer. Ou pour les plus anciens, de se remémorés des souvenirs impérissables des plus grands joueurs de l’Histoire du basket.
            A la fin de ce classement, sauriez-vous définir ce qu’est le plus important : les titres ou les stats ?
            </p>
        <p class="postDate">Posté le 30 Juillet 2020</p>
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