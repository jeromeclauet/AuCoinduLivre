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
        <img src="../Assets/Image/L'Ami Retrouvé.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 128 pages</ol>
            <ol>Editeur : Galimard</ol>
            <ol>Date de Sortie : 3 Mai 1983</ol>
            <ol>Collection : Folio</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>L'Ami Retrouvé</h2>
            <br>Âgé de seize ans, Hans Schwartz, fils unique d'un médecin juif, fréquente le lycée le plus renommé de Stuttgart. Il est encore seul et sans ami véritable lorsque l'arrivée dans sa classe d'un garçon d'une famille protestante d'illustre ascendance lui permet de réaliser son exigeant idéal de l'amitié, tel que le lui fait concevoir l'exaltation romantique qui est souvent le propre de l'adolescence.
            C'est en 1932 qu'a lieu cette rencontre, qui sera de courte durée, les troubles déclenchés par la venue de Hitler ayant fini par gagner la paisible ville de Stuttgart. Les parents de Hans qui soupçonnent les vexations que subit le jeune homme au lycée, décident de l'envoyer en Amérique, où il fera sa carrière et s'efforcera de rayer de sa vie et d'oublier l'enfer de son passé. Ce passé qui se rappellera un jour à lui de façon tragique.
            Une petite heure de lecture, agréable mais sans plus, qui prend soudain une toute autre dimension à la dernière ligne. Que d'émotion alors, j'en étais toute retournée, larmes et frissons à la clé.
            Comme le souligne Arthur Koestler dans l'introduction, Fred Uhlman a écrit un récit court, mais abouti et complet, de la même façon que le peintre qu'il était faisait rentrer une œuvre dans le cadre délimité d'une toile. C'est très impressionnant, surtout pour moi qui ai habituellement besoin de longs développements pour rentrer dans l'histoire et ressentir des émotions. Là, j'ai certes lu avec tiédeur les débuts de cette amitié délicate entre un adolescent juif et un jeune nazi dans les Années Trente, mais tout a pris du relief et de la force à la lumière du dénouement. Moi aussi j'ai eu l'impression d'un ami retrouvé.
            En un mot comme en cent, j'ai beaucoup aimé ce livre, pour l'amitié, l'héroïsme et l'humanité, et le recommande chaudement, aux adultes comme aux adolescents.
            </p>
        <p class="postDate">Posté le 21 Juillet 2020</p>
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