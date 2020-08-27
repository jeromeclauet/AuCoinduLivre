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
<div class="main-romans">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src='../Assets/Image/3ème Droite.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Poche : 256 pages</ol>
            <ol>Editeur : Flammarion</ol>
            <ol>Date de Sortie : 3 Octobre 2018</ol>
            <ol>Collection : Pop Culture Lit</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>3ème Droite</h2>
            <br>J’habite au 3e étage à droite. Si je meurs, c’est probablement mon proprio qui m’a tué. « Un jeune homme quitte le cocon familial pour s’installer dans un appartement qu’il loue à Mr. K. , propriétaire louche et peu causant. Dans ce nouveau lieu, des événements étranges et inquiétants vont rapidement se multiplier, et les voisins vont peu à peu révéler leurs vrais visages... 3e droite est un roman d’un genre nouveau construit comme une série télé, en 18 chapitres concis et truffés de rebondissements.
            François Descraques est le réalisateur du Visiteur du Futur, une web série que j'ai connu dès ses débuts et que j'ai suivie avec assiduité. J'aimais beaucoup l'ambiance, les personnages ainsi que l'intrigue aussi futuriste que loufoque ! J'avais hâte de voir ce que le scénariste allait nous proposer… Aussitôt reçu, aussitôt lu ! Je ne suis absolument pas déçue ! D'ailleurs, je pensais en lire un peu chaque jour, mais j'étais tellement prise par ma lecture que je l'ai terminée d'une traite, en pleine nuit… J'étais incapable de décrocher tant c'était haletant. L'utilisation de l'autodérision et de l'humour m'ont également beaucoup plu. Avec impatience et curiosité, je suivais ces étranges scènes perturbantes. L'auteur a vraiment su instaurer une atmosphère particulière tout en distillant des faits intrigants et en faisant monter la pression ! Au fil de l'aventure, je devenais d'ailleurs aussi paranoïaque que le personnage principal, notamment à cause de Mr K., le propriétaire de son appartement véritablement intrusif et bizarre…
            « 3e droite » m'a rappelé les threads que l'on peut trouver sur certains comptes Twitter ou dans des vidéos de youtubeurs (comme Squeezie, Paradox et d'autres). C'est une sorte d'histoire d'horreur publiée petit à petit sur les réseaux sociaux. Appréciant le genre, je me suis régalée avec cette ambiance glauque, étrange, à la limite du réel et donnant quelques sueurs froides. Je n'ai pas forcément été effrayée par ce que j'ai lu néanmoins, j'ai vraiment été captivée par le suspense bien géré. Entre le comportement insolite de Mr K., l'étrange marque d'insecte sur le bras des nouveaux venus, les bruits nocturnes, les autres locataires, la cave morbide de l'immeuble et bien d'autres événements, il y avait de quoi s'inquiéter ! Pour donner de la consistance à son livre, François Descraques a utilisé un style jeune en allant régulièrement à la ligne, comme s'il s'agissait réellement de tweets avec une limite de mots. Il décrit de temps en temps ce qu'il se passe et utilise un procédé théâtral pour faire parler les personnages. le tout est agrémenté de photos, de petits commentaires ainsi que de descriptions de vidéos. Je dois reconnaître que cela fait son petit effet ! C'est tout simplement génial ! On est dans un ouvrage hybride changeant de ce qu'on a l'habitude de lire.
            Malgré son côté thriller et page-turner, j'ai tout de même un doute sur le fait que ce titre plaise à tout le monde. L'un des principaux freins est le langage familier et vulgaire employé par le narrateur. On est sur des expressions « de jeunes » avec des insultes ainsi que du vocabulaire d'aujourd'hui (ex : « mode grosses couilles », « fuck les rageux », « je checke », « quand tu fumes, tu daubes vénère », etc.). Pour ma part, j'ai mis un peu de temps avant de m'habituer, mais j'ai fini par m'y faire au bout d'une vingtaine de pages. Je n'ai simplement pas l'habitude de trouver cela en littérature, mais cela ne m'a pas déplu. Cependant, je peux comprendre que ce soit rédhibitoire pour certains lecteurs. Aussi, je me demande si cet ouvrage n'est pas destiné à un public young adult ou à un public allant de vingt à quarante ans maximum, plus coutumiers de ce type de langage et certainement plus intéressés par tout ce qui touche aux creepypasta (légende urbaine diffusée sur Internet pouvant se décliner sous plusieurs formats). Peut-être que je me trompe néanmoins, je sais d'avance que la majorité de mes collègues ou que ma mère avec qui nous échangeons nos lectures bloqueront sur le style ou la grossièreté… Bref, adeptes des creepypasta et des threads d'horreur, foncez découvrir cet ovni littéraire ! Vous ne le regretterez pas !
            </p>
        <p class="postDate">Posté le 24 Juillet 2020</p>
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