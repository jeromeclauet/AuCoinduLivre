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
        <img src='../Assets/Image/Tu me trouveras au bout du monde.jpg' width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 219 pages</ol>
            <ol>Editeur : Héloïse d'Ormesson</ol>
            <ol>Date de Sortie : 5 Février 2015</ol>
            <ol>Collection : Littérature</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Tu me trouveras au bout du monde</h2>
            <br>Jean-Luc Champollion, galeriste parisien, s'était promis de ne plus jamais écrire une seule lettre d'amour depuis une terrible déception à l'adolescence. Pourtant, lorsqu'il en découvre une dans sa boîte à lettres, intrigué, il ne peut s'empêcher d'y répondre. Une relation épistolaire nourrie naît alors entre le jeune homme et l'énigmatique Principessa. Mais cette dernière sait ménager le suspense, et l'entraîne dans un jeu de piste amoureux avant d'accepter de se dévoiler en chair et en os. Pris au jeu de ce tendre duel, Jean-Luc s'enflamme. Qui est donc cette femme qu'il imagine sans la voir, qu'il comprend sans la connaître ? Comment la convaincre de se livrer ? Devra-t-il aller jusqu'au bout de la terre pour la tenir enfin serrée dans ses bras ? Nicolas Barreau est incontestablement un maestro de la comédie romantique. Multipliant les fausses pistes et les contretemps, le lecteur mène l'enquête tambour battant aux côtés du héros. Un roman rafraîchissant et teinté d'humour où nous découvrons deux personnalités attachantes, autour desquels gravite une galerie de personnages secondaires savoureux. Tu me trouveras au bout du monde est un pur moment de plaisir. On en redemande !
            Jean - Luc, dit « Le duc » un jeune galeriste renommé, don Juan à ses heures, aux conquêtes féminines nombreuses, flanqué d'amis sûrs et rassurants , reçoit un jour une lettre énigmatique, d'une correspondante inconnue qui signe « La  Principessa . »
            S'ensuit une excursion aventureuse doublée de recherches infructueuses qui nous promènent dans un Paris aux restaurants chics, des hôtels particuliers aux rues du cœur de Paris ...
            Telle une enquête à la Hercule Poirot nous entraînant au sein de la Gare de Lyon , ses salles immenses hautes de dix mètres respirant l'esprit Belle Époque....et bien d'autres lieux emblématiques à la recherche de « La Principessa . »
            Cette énigmatique correspondante distille au fil de ses missives de savants indices ...qui donnent des ailes à l'imagination de Jean - Luc, occupent ses pensées , lui insufflent de l'énergie....le découragent aussi....
            «  Qui était la Principessa? Une femme hideuse au grand nez? Ou peut - être Lucille, son amoureuse de l'adolescence, à la beauté surnaturelle qui l'avait trahie jusqu'a L'humiliation ?
            Que désire cette femme?
            Et comment la convaincre de tomber le masque ?
            Jean- Luc devra- t- il aller jusqu'au bout du monde pour la tenir dans ses bras ?
            C'est un court roman épistolaire léger et distrayant, un marivaudage savoureux chatoyant , semblable à une bulle de plaisir servi par une écriture simple et imagée, fluide et alerte avec une touche de préciosité , désuète, un voyage galant et inventif , en compagnie de « Cézanne » le chien fidèle de Jean - Luc ...
            Une comédie sensuelle et romantique , un jeu de piste amoureux à lire au soleil , pendant les vacances ......
            Je ne connais pas l'auteur , on m'a prêté cet ouvrage ...
            </p>
        <p class="postDate">Posté le 10 Juillet 2020</p>
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