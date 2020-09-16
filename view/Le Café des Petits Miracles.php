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
        <img src='../Assets/Image/Le Café des Petits Miracles.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 295 pages</ol>
            <ol>Editeur : Héloïse d'Ormesson</ol>
            <ol>Date de Sortie : 8 Février 2018</ol>
            <ol>Collection : Littérature</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Le Café des Petits Miracles</h2>
            <br>Une fois encore Nicolas Barreau nous embarque dans une magnifique histoire d'amour, qui nous enseigne que laisser tomber son sac dans le Grand Canal, faire confiance à un vénitien à la beauté ténébreuse et sentir la terre se dérober sous les pieds peut aussi être une chance.
            Éléonore Delacourt a vingt cinq ans et aime la dolce vita. Elle ne court pas, elle se promène. Elle n'est pas impulsive, mais réfléchie. Elle ne déclare pas sa flamme, elle préfère en rêver. Timide et romantique, elle adore s'évader dans les livres et croit aux présages, petits messagers du destin. Elle n'a pas hérité de l'intrépidité de sa grand-mère, qui l'a pourtant élevé et lui a légué l'objet qu'elle chérit le plus : une bague en grenats avec une gravure en latin « Omnia vincit amor ».
            Elle n'est a priori pas le genre de fille qui, de but en blanc, vide son compte en banque et, par une froide matinée de janvier, saute dans un train à destination de Venise ! Mais parfois la vie est imprévisible et une phrase énigmatique retrouvée dans un vieux livre peut avoir des conséquences inattendues...
            Trois mois qui sont aussi inscrits sur l'anneau que Nelly a hérité de sa grand-mère et qui vont la mener à Venise. Mais n'anticipons pas.
            Au début du livre la jeune femme est à Paris, amoureuse de son prof de philo. Une flamme qu'elle n'a pas osé déclarer, attendant le moment opportun. Quand ce dernier l'invite à l'accompagner Outre-Atlantique pour un séminaire, on se dit que l'opportunité est bien belle. Sauf que Nelly ne peut prendre l'avion, victime d'une phobie liée à un accident qui l'a traumatisée. Elle devra patienter… et laissera passer sa chance.
            C'est en désespoir de cause qu'elle prend le train pour Venise par un froid matin de janvier, histoire de se changer les idées, de découvrir la Sérénissime, mais surtout pas pour tomber dans les bras du premier dragueur venu. Il ne va d'ailleurs pas tarder à surgir, le beau Valentino, pour lui proposer de la guider dans la ville. Mais Nelly ne veut pas se laisser conter fleurette. « Elle aspirait à l'amour, certes. Mais pas à une aventure avec un séducteur (aussi sympathique fût-il), aventure qui serait terminée avant même d'avoir eu le temps d'épeler le mot «avventura». Un Italien ne pouvait s'empêcher de chercher à conquérir le coeur d'une jolie femme — c'était une sorte de sport national. » Mais quelquefois les circonstances – un sac qui tombe sur une gondole – vous poussent à réviser votre jugement.
            On se doute bien qu'après quelques rendez-vous manqués et autant de quiproquo, l'amour va finir par l'emporter.
            Comme dans la chanson de Jo Dassin, dans ce petit café un peu à l'écart,
            « Au rendez-vous des amours sans abri
            On était bien, on se sentait seuls au monde
            On n'avait rien, mais on avait toute la vie ».
            Si l'histoire est certes cousue de fil blanc, elle nous permet de déambuler dans Venise, d'apprendre plus joyeusement que dans un guide de voyage la topographie, l'architecture, l'histoire de cette ville sans doute tout aussi romantique que Paris.
            Et quel mal y aurait-il à se laisser entraîner par le charme, l'émotion, la douceur des choses?
            </p>
        <p class="postDate">Posté le 13 Juillet 2020</p>
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