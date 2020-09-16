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
<div class="main-romans">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src='../Assets/Image/La Vie en Rosalie.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Poche : 352 pages</ol>
            <ol>Editeur : Le Livre de Poche</ol>
            <ol>Date de Sortie : 1 Février 2017</ol>
            <ol>Collection : Littérature</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>La vie en Rosalie</h2>
            <br>Rosalie Laurent tient une jolie papeterie à Paris, rue du Dragon, où elle confectionne et vend des cartes poétiques. Un jour, un vieil homme entre et renverse un présentoir. Quelle n'est pas la surprise de Rosalie face à cet inconnu qui n'est autre que Max Marchais, dont les albums ont bercé sa jeunesse ! Séduit par son talent, il lui propose d'illustrer son célèbre conte, Le Tigre bleu. Ravie de cette heureuse collaboration, elle expose l'ouvrage publié dans sa devanture. Mais un jour, un professeur de littérature anglo-saxonne, fraîchement débarqué des États-Unis, surgit dans son magasin et, après avoir lui aussi renversé un présentoir, soutient mordicus que l'histoire du Tigre bleu lui appartient. Max Marchais serait-il un plagiaire ? Les deux jeunes gens, d'abord hostiles, vont faire cause commune pour enquêter et mettre au jour un secret qui les liera à tout jamais.
            Comme dans les précédents Barreau, le destin se nourrit de coïncidences, de hasards et l'amour savamment contrarié doit triompher de malentendus et quiproquos. Régal de suspense et d'émotion, La Vie en Rosalie est une histoire mutine dont le charme délicatement anachronique est une incitation à prendre son temps et savourer les petits riens de la vie.
            Ayant envie d'une lecture légère, je me suis plongée dans La vie en Rosalie de Nicolas Barreau.
            Comme j'ai beaucoup aimé ses deux premières comédies romantiques, je ne pensais pas me tromper en imaginant aimer aussi celle-ci :)
            En en effet, je ne regrette pas du tout ma lecture.
            Nous avons ici une jolie comédie romantique avec comme personnage principal une jeune femme touchante : Rosalie.
            Elle crée des cartes de vœux et tient une papeterie que j'aimerais découvrir :)
            Tout est sympathique dans ce roman, qui m'a charmé de la première à la dernière page.
            Il manque peut-être un peu d'originalité car je dois avouer que l'ensemble est assez prévisible, même si l'auteur nous mets des petites choses qu'on ne pouvait imaginer ici et là.
            Je m'attendais à ce genre de fin, je n'ai pas été étonnée par ce roman mais il m'a fait passé un agréable moment et je suis ravie de ma lecture.
            L'auteur a réussi à me changer les idées, comme je le souhaitais, et je mets cinq étoiles à cette jolie comédie romantique :)
            </p>
        <p class="postDate">Posté le 14 Juillet 2020</p>
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