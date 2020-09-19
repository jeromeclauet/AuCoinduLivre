<?php 
session_start();
include '../models/books.php';
include '../models/articles.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au Coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
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
        </div>
        <div class="booktext col-lg-8 col_md_12">
        <h2>La Peste</h2>
            <p>
            <br>Je dois avouer que j’ai une histoire particulière avec ce roman, c’est le premier de ma vie de jeune adolescent que j’ai fini un bouquin en entier et aussi long. Celui que je traînais absolument partout au lycée. Aujourd’hui seul son état peut en témoigner, page écornée, couverture abîmée…
            <br>La Peste d’Albert Camus…
            <br>« C'est moi qui remplace la peste », s'écriait Caligula, l'empereur dément. 
            </p>
            <a href="../view/La Peste.php">En voir plus...</a>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/Parcours commando.jpg" width="70%" >
        </div>
        <div class="booktext col-lg-8 col_md_12">
        <h2>Parcours commando</h2>
            <p>
            <br>Editer aux éditions Nimrod et écrit par Alain Alivon. Je sais, ce nom ne vous dit probablement rien car Mr Alivon est plus connu sous le pseudonyme « Marius ». Ancien commando de marine, animateur de plusieurs émissions de télévision en rapport avec l’armée. Marius est personnage atypique.
            <br>Le début de l’histoire, raconté par Marius (je le dit, mais ce livre est une autobiographie), nous emmènes dans le Marseille des années 60/70.
            </p> 
            <a href="../view/Parcours Commando.php">En voir plus...</a>
        </div>
    </div>
    </div> 
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/Jusqu'à Raqqa.jpg" width="70%" >
        </div>
        <div class="booktext col-lg-8 col_md_12">
        <h2>Jusqu'à Raqqa</h2>
            <p>
            <br>Ecrit par André Herbet, et éditer Belles Lettres. 
            <br>Ce livre est l’histoire d’un français profondément internationaliste qui ne connait rien aux armes et qui décide de partir combattre 15 mois auprès des camarades du YPG (Yekîneyên Xweparastina Gel), qui est l’Unité de Protection du Peuple. Je vous préviens de suite, je ne suis pas du tout en accord avec les idées et les propos de l’auteur du livre. 
            </p>
            <a href="../view/Jusqu'à Raqqa.php">En voir plus...</a>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="booklist d-flex flex-wrap text-center">
        <div class="col-lg-4 col-md-12">
        <img src="../Assets/Image/3ème Droite.jpg" width="70%" >
        </div>
        <div class="booktext col-lg-8 col_md_12">
        <h2>3ème Droite</h2>
            <p>
            <br>J’habite au 3e étage à droite. Si je meurs, c’est probablement mon proprio qui m’a tué. « Un jeune homme quitte le cocon familial pour s’installer dans un appartement qu’il loue à Mr. K. , propriétaire louche et peu causant. 
            <br>Dans ce nouveau lieu, des événements étranges et inquiétants vont rapidement se multiplier, et les voisins vont peu à peu révéler leurs vrais visages...
            </p>
            <a href="../view/3ème Droite.php">En voir plus...</a>
        </div>
    </div>
    </div>
    <div class="bookpage text-center">
    <a href="Romans.php" style="color:black;">< 1-</a><a href="Romans-2.php" style="color:black;">2-</a><a href="Romans-3.php" style="color:black;">3 ></a>
    </div> 
</div>
<?php include '../php_page/Footer.php' ?>