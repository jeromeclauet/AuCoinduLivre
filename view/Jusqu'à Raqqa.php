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
        <img src="../Assets/Image/Jusqu'à Raqqa.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 256 pages</ol>
            <ol>Editeur : Les Belles Lettres</ol>
            <ol>Date de Sortie : 8 Mars 2019</ol>
            <ol>Collection : Mémoires de guerre</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Jusqu'à Raqqa</h2>
            <br>Ecrit par André Herbet, et éditer Belles Lettres. Ce livre est l’histoire d’un français profondément internationaliste qui ne connait rien aux armes et qui décide de partir combattre 15 mois auprès des camarades du YPG (Yekîneyên Xweparastina Gel), qui est l’Unité de Protection du Peuple.
            Je vous préviens de suite, je ne suis pas du tout en accord avec les idées et les propos de l’auteur du livre. André Herbet n’est qu’un pseudonyme afin d’éviter d’être la cible de certaines personnes qui pourraient être mal intentionnées envers sa personne ou sa famille.
            Donc, l’auteur est internationaliste, marxiste, (de gauche, évidemment pour les endormis), activiste révolutionnaire et qui soutient la cause kurde. Je ne me cacherai en disant que j’était curieux de voir un « gauchiste » prendre les armes et défendre des civils contre l’armée syrienne ou Daech. 
            Je précise également que je soutiens son combat de défendre les civils ainsi que le peuple kurde contre Bacchar Al Asad mais … Je ne soutiendrai pas ces idéaux économiques.
            Ce livre n’est pas proprement un  livre mais plutôt un journal de guerre, il raconte lors de sa première visite dans le Kurdistan syrien, en 2015. Pour nos yeux d’Occidentaux, qui venons d’être frappé en plein par les attentats de Charlie Hebdo ( notre personnage n’est pas plus dérangé que cela par cet attentat mais plus par celui du 13 Novembre, sur les terrasses et au Bataclan. C’est d’ailleurs cela qui poussera André à partir pour la Syrie.
            Après un premier passage enrichissant et sans plus de combat car notre auteur se trouvant à l’arrière des zones de conflits. Il est quand même emprisonné dans une prison irakienne.
            Il revient en France afin de souffler et de revoir sa famille. Il est cueilli par la DGSI ( les services secrets français) à son domicile afin qu’il s’explique sur son « voyage » en Syrie. Dû, au fait notamment, que beaucoup de français radicalisés sont partis dans ce pays déchirée par la guerre civile.
            Cette visite des services secrets ne l’empêche pas de repartir une seconde fois et il décide de rester sur place jusqu’à la chute de l’état islamique en Syrie, jusqu’à Raqqa face à des adversaires déterminés et n’ayant plus rien à perdre si ce n’est la vie. Chaque centimètres gagnés est chèrement payer par les troupes kurdes mais ils finissent par libéré la ville de Raqqa et notre auteur repart en France afin de vivre une vie plus paisible.
            Cette histoire est extrêmement captivante car elle nous plonge dans un conflit qu’on aura suivi (pour les plus assidus en politique étrangère) de très loin. Mais un Français comme beaucoup d’autres étrangers décident de prendre part au conflit pour des diverses raisons. 
            Ce que je vais retenir de ma lecture c’est qu’avec beaucoup de détermination on peut aller au bout de ses idées et en cela l’auteur est admirable de courage même si je le répète je ne suis pas du tout d’accord avec la plupart des idées véhiculées par l’auteur.
            </p>
        <p class="postDate">Posté le 24 Juillet 2020</p>
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