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
        <img src='../Assets/Image/Le Sourire des Femmes.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Poche : 286 pages</ol>
            <ol>Editeur : Le Livre de Poche</ol>
            <ol>Date de Sortie : 6 Février 2014</ol>
            <ol>Collection : Littérature</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Le Sourire des Femmes</h2>
            <br>Encore sous le coup du départ soudain de son compagnon, Aurélie remarque dans une librairie un roman intitulé Le sourire des femmes. La lecture passionnée de ce livre, où elle se reconnaît dans le personnage principal, la sauve du désespoir. Aussi décide-t-elle de remercier l'auteur en l'invitant au restaurant. Mais rencontrer l'écrivain par l'intermédiaire de son éditeur se révèle compliqué.
            Dès la première phrase du roman, l'intrigue est lancée. Aurélie est propriétaire d'un restaurant parisien. Elle découvre par hasard un roman qui va lui redonner goût à la vie.
            Elle s'aperçoit qu'elle ressemble étrangement à l'héroïne du roman. Décidée à percer le mystère, elle se met en tête de rencontrer l'auteur pour lui demander des explications. Elle s'adresse en premier lieu à l'éditeur français du livre, mais s'en suive de multiples quiproquos...
            La pugnacité d'Aurélie sera-t-elle récompenser pour qu'elle puisse enfin connaître le fin mot de l'histoire?
            Comédie romantique aux accents poétiques dans l'écriture et humoristiques dans les situations.
            Ce roman est une petite bouffée d'oxygène, certes le scénario pourrait vous sembler cousu d'avance. Mais il a le mérite d'être bien écrit et j'ai passé d'agréables moments de lecture à me demander comment les personnages allaient s'en sortir. Par ailleurs, tout au long du livre, une question me tournait dans la tête: cette histoire n'aurait-elle pas une part de vérité?
            Je m'étonne du peu de lecteur, alors un conseil, si vous souhaitez passer un moment agréable en compagnie d'Aurélie et d'un mystérieux auteur, n'hésitez plus une minute. Lancez-vous dans les rues de Paris, à la découverte du monde de l'édition et pour les amateurs de gastronomie, une surprise vous attend à la fin de l'ouvrage...
            A découvrir! Un livre qui donne envie d'écrire.
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