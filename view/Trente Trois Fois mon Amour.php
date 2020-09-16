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
        <img src='../Assets/Image/Trente Trois Fois Mon Amour.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Poche : 304 pages</ol>
            <ol>Editeur : Héloïse d'Ormesson</ol>
            <ol>Date de Sortie : 7 Février 2019</ol>
            <ol>Collection : Littérature</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Trente trois fois mon amour</h2>
            <br>Julien Azoulay, jeune auteur de comédie romantique, perd tragiquement son épouse âgée de trente-trois ans. Malgré ses réticences et la douleur, il honore la dernière volonté de son aimée : écrire trente-trois lettres pour lui raconter l'après, cette vie qui se poursuit sans elle. Ce sera leur dernier secret. Mais, alors qu'il les pensait en sécurité, cachées dans un compartiment de la pierre tombale, les lettres disparaissent... et réapparaissent !
            Un poème de Prévert, le dessin d'une fleur ou encore un ticket de cinéma, quelqu'un a répondu à Julien. Pour le jeune homme et son fils Arthur commence une aventure qui conjugue à nouveau l'espoir au présent.
            Nicolas Barreau n'a pas son pareil pour embarquer son lecteur dans une douce romance où l'amour guérit tous les maux. À travers le deuil de l'être aimé, sa plume délicieuse apprivoise le chagrin et parvient à rallumer les cœurs éteints.
            Dévasté, mélancolique, nostalgique, Julien ne tient plus debout que pour son fils Arthur, quatre ans.
            Dans les lettres qu'il écrit à sa défunte épouse, Julien raconte son désarroi, son quotidien, ses doutes, son manque. Quand il dépose une de ses lettres sur la tombe, il trouve un objet mystère. Dans sa souffrance, il ne peut que penser qu'il s'agit d'un signe d'Helene.
            Ce roman est d'une douceur incroyable. On s'y promène les yeux fermés en effleurant les ruelles de Montmartre, on découvre des lieux magiques comme le mur des je t'aime que je ne connaissais pas. Ça sent bon Paris ce roman. C'est certes triste mais il y a pleins de petites bougies qui illuminent constamment le tableau. Arthur par sa jeunesse et insouciance colore sa maman des plus beaux ombrages. Julien rencontre des gens lumineux, des gens qui portent la vie quand lui croule sous le poids du deuil.
            Un roman merveilleusement vivant qui fait du bien et donnerait envie de s'asseoir sur les marches de Montmartre, un sourire aux lèvres, une main accrochée à une autre.
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