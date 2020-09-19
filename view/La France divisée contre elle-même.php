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
        <img src='../Assets/Image/La France divisée contre elle-même.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 310 pages</ol>
            <ol>Editeur : Altitude ed</ol>
            <ol>Date de Sortie : 4 Août 2017</ol>
            <ol>Collection : /</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>La France divisée contre elle-même</h2>
            <br>La France n’est pas seulement en déclin : elle est aussi en pleine décomposition.
            Si sa puissance diminue, son essence s’altère à une vitesse plus grande encore.
            Plusieurs siècles d’anthropocentrisme ont greffé en son sein une autre nation, qui la phagocyte et tente de se substituer à elle : l’Antifrance, autrement nommée République des Lumières.
            Depuis deux cents ans, le camp de l’Antifrance s’attaque à l’anthropologie française dans l’espoir de pouvoir créer un nouvel Adam. La lutte entre les partisans de l’anthropologie républicaine et les partisans de l’anthropologie française est sans merci.
            Suite à la révolution de 1944, la partie semblait définitivement terminée. Mais les désastres engendrés par le mondialisme et la formation, grâce à internet, d’une nouvelle opinion publique, viennent bouleverser la donne.
            A l’heure des réseaux sociaux et de la comminucation à outrance, il est facile de constater à quel point l’Antifrance agit pour détruire l’image que le peuple se fait de la famille, de la vie en général. Il n’existe aucun safe space comme voudrait nous le faire croire les partisans de cette destruction de notre nation.
            En ce point, ce livre rejoint beaucoup ceux de Papacito, d’ailleurs ils sont du même bord politique même Mr Abauzit est plus royaliste que souverainiste. Mais l’auteur, choisit bien ses mots et les pèsent. Aucunes violences n’est présente dans ce livre, mais ce sont plus des constatations, des faits. Notre pays se meure, notre société se meure, la richesse culturelle qui faisait la puissance de notre nation s’étiole au fil du temps.
            Et si nous prenons ce qu’il se passe à l’heure actuelle avec l’ensauvagement de notre société, on peut largement se dire que l’auteur avait une vue prémonitoire sur ce qui allait se passer en France et en Europe de manière générale. Il n’est d’ailleurs pas le seul auteur à faire ce constat, Laurent Obertone le fait également mais en étant moins cool sur les conséquences qui attendent le peuple de France.
            Je recommande ce livre car il est utile de se rendre compte par soi-même que l’histoire du peuple de France est magnifique et ne mérite absolument pas le traitement qui lui ai réservé par ceux qui veulent la détruire au profit du France de la victimisation systémique.
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