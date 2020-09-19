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
        <img src='../Assets/Image/La Peste.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 272 pages</ol>
            <ol>Editeur : Gallimard</ol>
            <ol>Date de Sortie : 3 Février 2013</ol>
            <ol>Collection : Folio</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>La Peste</h2>
            <br>Je dois avouer que j’ai une histoire particulière avec ce roman, c’est le premier de ma vie de jeune adolescent que j’ai fini un bouquin en entier et aussi long. Celui que je traînais absolument partout au lycée. Aujourd’hui seul son état peut en témoigner, page écornée, couverture abîmée…
            La Peste d’Albert Camus…
            « C'est moi qui remplace la peste », s'écriait Caligula, l'empereur dément. Bientôt, la « peste brune » déferlait sur l'Europe dans un grand bruit de bottes. France déchirée aux coutures de Somme et de Loire, troupeaux de prisonniers, esclaves voués par millions aux barbelés et aux crématoires, La Peste éternise ces jours de ténèbres, cette « passion collective » d'une Europe en folie, détournée comme Oran de la mer et de sa mesure. Sans doute la guerre accentue-t-elle la séparation, la maladie, l'insécurité. Mais ne sommes-nous pas toujours plus ou moins séparés, menacés, exilés, rongés comme le fruit par le ver ? Face aux souffrances comme à la mort, à l'ennui des recommencements, La Peste recense les conduites ; elle nous impose la vision d'un univers sans avenir ni finalité, un monde de la répétition et de l'étouffante monotonie, où le drame même cesse de paraître dramatique et s'imprègne d'humour macabre, où les hommes se définissent moins par leur démarche, leur langage et leur poids de chair que par leurs silences, leurs secrètes blessures, leurs ombres portées et leurs réactions aux défis de l'existence. La Peste sera donc, au gré des interprétations, la « chronique de la résistance » ou un roman de la permanence, le prolongement de L'Étranger ou « un progrès » sur L'Étranger, le livre des « damnés » et des solitaires ou le manuel du relatif et de la solidarité - en tout cas, une œuvre pudique et calculée qu'Albert Camus douta parfois de mener à bien, au cours de sept années de gestation, de maturation et de rédaction difficiles...
            La Peste ne parlerait que de la peste ? Ce serait éluder un peu trop rapidement le talent d'Albert Camus. Ses livres sont des strates qui entrecroisent plusieurs récits à plusieurs niveaux, tous étant essentiels les uns aux autres.
            La trame de l'histoire est simple et respecte la thématique annoncée. Dans les années 1940, la peste se déclare à Oran et force ses habitants à une mise en quarantaine qui déchaîne d'abord des réactions passionnées, avant de céder place à une indifférence de plus en plus tenace à mesure que la période de réclusion se prolonge. La peste semble alors ne jamais devoir finir et les habitants se résignent à ne plus revoir ceux dont ils sont coupés et –c'est peut-être le plus difficile- à devenir des personnages anhistoriques. Pourtant, autour d'eux, la peste continue à faire des ravages et ne laisse jamais deviner l'identité de ses futures victimes.
            Le récit, pris en charge par un narrateur d'abord mystérieux, se concentre sur le personnage du docteur Rieux. Technique, ne laissant jamais transparaître ses émotions et effaçant toujours son individualité en face des vagues que provoque l'ensemble de ses congénères, ce personnage est d'autant plus crédible qu'Albert Camus semble s'être directement inspiré de sa propre personnalité avant de l'intégrer à son récit. le docteur Rieux impose une distance qui convient aux évènements. En temps de peste, il s'agit de prendre son rôle au sérieux, de tout faire pour guérir les malades et pour soulager les familles, sans jamais s'impliquer au point de détruire sa propre santé ou de sacrifier son équilibre mental aux passions de l'affection. Pourtant, derrière ce professionnalisme intransigeant qui nous permettra de connaître la progression de la maladie jour après jour –ses lois absurdes, son imprévisibilité de la gratuité de ses engouements à ses rémissions inespérées-, une menace plus grande que celle de la peste se profile.
            </p>
        <p class="postDate">Posté le 22 Juillet 2020</p>
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