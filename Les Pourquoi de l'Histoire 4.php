<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale 1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> />
        <link rel="stylesheet" href="Assets/style.css" type="text/css" />
    </head>
<body>
    <?php include 'php_page/Header.php' ?>
<div class="main-history">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/Les Pourquoi de l'Histoire 4.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 256 pages</ol>
            <ol>Editeur : Albin Michel</ol>
            <ol>Date de Sortie : 2 Mai 2018</ol>
            <ol>Collection : A.M Histoire</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Les Pourquoi de l'Histoire 4</h2>
            <br>Voici le deuxième résumé de la série de livre des pourquoi de l’Histoire, encore imprimé aux éditions Albin Michel.
            Toujours écrit par Stéphane Bern, ce quatrième et dernier volume des pourquoi de l’Histoire garde la même recette qui pour moi a fait le succès des trois premiers volumes, c’est-à-dire expliquer au lecteur en une voire deux pages la réponse à une question donnée.
            Comme par exemple, pourquoi le drapeau américain est-il composé de 13 bandes horizontales ou pourquoi Anne de Bretagne a-t-elle été couronnée deux fois reine de France? Comme d’habitude, la réponse se trouve à l’intérieur du livre.
            Je fais le même constat que pour les autres tomes, je ne suis toujours pas fan de l’Histoire de manière générale mais je dois dire que la construction du livre permet de ne pas décrocher et pouvoir passer à une autre histoire rapidement.
            Force est de constater que la construction du livre et les Histoires prenantes aide le lecteur a ce passionné pour un sujet aussi grand qu’est l’Histoire.
            Je vais vous donnez le même conseil que je vous ai donné pour le premier tome, FONCEZ l’acheter ! 
            En plus de ce conseil, je vous incite à rester curieux par rapport au monde qui vous entoure, soyez curieux !
            </p>
        <p class="postDate">Posté le 28 Juillet 2020</p>
        </div>
        </div>
    </div>
    <div> 
        <h3 class="text-center">Commentaires :</h3>
    <form method="POST">
        <input type="text" name="pseudo" placeholder="Votre Pseudo"/></br></br>
        <input type="textarea" size="150" name="commentaire" placeholder="Votre commentaire..."></textarea></br></br>
        <input type="submit" class="btn btn-warning" value="Poster votre commentaire" name="submit_commentaire"/></br></br>
    </form>
    </div>
    </div>
    <?php include 'php_page/Footer.php' ?>
</body>
</html>