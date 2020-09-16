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
<div class="main-sports">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/TrashTalk.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 288 pages</ol>
            <ol>Editeur : Marabout</ol>
            <ol>Date de Sortie : 14 Février 2018</ol>
            <ol>Collection : Sports</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2># TrashTalk</h2>
            <br>Grace aux deux auteurs de ce livre et à la production des éditions marabout, nous allons, au fil des pages, parcourir des anecdotes connues et méconnues sur l’un des sports américain professionnel, le plus populaire au monde. Je veux bien sûr parler du : Basket-Ball.
            Les premières pages de ce livre sont émises par le GRAND basketteur Français (Saint-Quentinois d’origine pour les gens du Nord 😊) et deux fois meilleur défenseur de l’année NBA (pour le moment). ((Picard et fan de basket que je suis, j’ai l’honneur de débuter cette lecture avec la préface signée Rudy GOBERT)). 
            Ce dernier explique ce qu’est pour lui la définition parfaite du « TrashTalk » version NBA. Pour avoir pratiqué ce sport pendant de nombreuses années, je ne peux qu’être d’accord avec lui.
            ((Pour les anglophobes, le TrashTalking signifie la manière avec laquelle vous allez humilier votre adversaire direct. Que ce soit de shooter de la main gauche tout le match alors que vous êtes droitier de nature : coucou Larry ! 
            Ou alors le fameux cigare du feu Mr Auerbach ( faudra lire le livre si ne vous connaissez pas l’histoire).))
            Ensuite le début de ce livre commence par une fenêtre à laquelle nous ne sommes pas habitué à voir à travers des mots. Ce sont les coulisses de ce show magnifique qu’est la NBA, vous découvrirez donc peut être certaines histoires qui vont sont pour le moment méconnues (mascottes, vie privée, tatouages, et bien d’autres encore ! ((A vous de découvrir))
            Pêlemêle vous aurez le droit à un classement des plus grands moments de TrashTalking mais aussi à un classement des meilleurs dunkeurs all-time en NBA.
            ((Evidemment les différents classements effectués par les deux auteurs de ce bouquin sont purement subjectif et non aucunement vocation a déclaré des guerres ! Mais force est de constaté qu’on ne peut qu’être d’accord, la plupart du temps,  sur les différents classements créés.))
            Ce livre je ne le recommande qu’aux fans de basket évidemment ( c’est même déjà étonnant que vous ne l’ayez pas encore lu ! ) mais aussi aux néophytes voulant en savoir plus sur les dessous de ce sport ! 
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
</body>
</html>