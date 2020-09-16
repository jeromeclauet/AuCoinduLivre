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
<div class="main-society">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src='../Assets/Image/Carnets de Guerre.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 278 pages</ol>
            <ol>Editeur : RING</ol>
            <ol>Date de Sortie : 18 Octobre 2018</ol>
            <ol>Collection : PULP</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Papacito : Carnets de Guerre</h2>
            <br>Papacito…. Papacito que dire toi ?! Ah oui ! On est là pour parler de ton livre ! 
            Ton livre est édité par aux éditions RING et écrit par toi-même.
            L’une des plus grosses burne d’Internet, après plusieurs vidéos sur Youtube via la chaîne RING, tu décides de publier ton livre et là, attention les yeux !
            Tout le monde en prend plein la gueule et c’est un véritable plaisir dans une société où ne nous pouvons plus rien dire ni faire.
            Tu remets à leur place les Jean-Michel Bobos parisiens végan se sentant licorne, c’est ce qui faut dire, le plus jouissif avec toi.
            Tu leur tape dessus jusqu’à ce que les dieux viennent les chercher pour leur éviter la violence de ta punition pour avoir été des « cucks » ! 
            Tu sanctionnes mais tu n’oublies pas d’honorer la France d’avant, la France jurassique, celle qui est sur le point de disparaître au profit d’une France à l’intérieure de laquelle nous n’avons plus le droit d’exprimer aucune pensée négative sur le « progrès » !
            Sinon tu sera la victime du tribunal de Twitter remplis de phasme qui adore donner leur avis sur tout sans qu’on leur demande leur avis !
            Je salue le courage que tu as de monter au front pour défendre les valeurs de notre civilisation. Tu supportes les critiques les plus virulentes à ton propos.
            En tout cas, c’est un vrai plaisir de te lire et d’essayer de te mettre sur le trône car tu es le dernier des Wisigoths !
            Donc si tu veux lire autre chose qu’un livre expliquant que le système français vaut le coup, c’est ici que cela se passe ! Tu te prendras un bon coup de réalité dans la gueule et tu pourra revenir quand tu aura pris un gros coup de testostérone dans les veines. Enculé va !
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