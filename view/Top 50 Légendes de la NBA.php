<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale 1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> />
        <link rel="stylesheet" href="../Assets/style.css" type="text/css" />
    </head>
<body>
    <?php include '../php_page/Header.php' ?>
<div class="main-history">
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/Top 50 des Légendes de la NBA.jpg" width="70%" >
        <h4>Informations complémentaires </h4>
        <ul>
            <ol>Broché : 372 pages</ol>
            <ol>Editeur : Talent Sport</ol>
            <ol>Date de Sortie : 10 Octobre 2018</ol>
            <ol>Collection : TED TALENT.SPORT</ol>
        </ul>
        </div>
        <div class="booktext col-lg-8 col_md_12">
            <p>
            <h2>Top 50 des Légendes de la NBA</h2>
            <br>Ce livre est imprimé par la maison d’édition « Talent Sport », connue pour leurs excellent livres sur Kobe Bryant ou Michael Jordan, notamment.
            Cet écrit démarre avec une préface de Mr GEORGE Eddy qui est le Monsieur NBA en France depuis les années 80 ! Il nous explique comment il définit une légende : les titres ou les stats ? A vous de décider !
            Rédigé par Julien Müller et Anthony Saliou tous deux passionnés de NBA, ils nous donnes leur classement des plus grandes légendes de la NBA.
            Ce classement totalement subjectif est assumé par les deux auteurs qui justifie leur choix pour chacun des joueurs en citant leurs moments les plus mythiques.
            Les exemples pour chaque joueurs sont presque infini, comme « The Shot » de Michael Jordan face aux Jazz d’Utah en finale NBA 1998. Le cross assassin d’Allen Iverson qui enjambe  Tyronn Lue après que ce dernier soit tombé sur les fesses du parquet du Staple Center de LA en 2001. Ou plus proche de nous, « The Block » de LeBron James face aux Golden State Warriors en finale NBA 2016.
            Le seul regret que je pourrais avoir concernant ce classement, c’est de ne pas voir Bill  « The Good Lord » Russel ou Larry « Legend » Bird apparaître plus haut. Fan des Celtics oblige ! 
            Ce livre est un excellent bouquin qui permet, aux plus jeunes de connaître des Légendes du jeu que seul les plus anciens d’entre nous ont eu la chance de voir jouer. Ou pour les plus anciens, de se remémorés des souvenirs impérissables des plus grands joueurs de l’Histoire du basket.
            A la fin de ce classement, sauriez-vous définir ce qu’est le plus important : les titres ou les stats ?
            </p>
        <p class="postDate">Posté le 30 Juillet 2020</p>
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
    <?php include '../php_page/Footer.php' ?>