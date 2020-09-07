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
            <h2>Un soir à Paris</h2>
            <br>Il était une fois le cinéma Paradis…
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
        <h3 class="text-center">Commentaires :</h3>
    <form method="POST">
        <input type="text" name="pseudo" placeholder="Votre Pseudo"/></br></br>
        <input type="textarea" size="150" name="commentaire" placeholder="Votre commentaire..."></textarea></br></br>
        <input type="submit" class="btn btn-warning" value="Poster votre commentaire" name="submit_commentaire"/></br></br>
    </form>
    </div>
    </div>
    <?php include '../php_page/Footer.php' ?>