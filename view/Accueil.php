<?php
session_start();
include_once '../config.php';
include '../models/roles.php';
include '../controllers/accueilCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title><?= isset($title) ? $title : '' ?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../Assets/style.css" type="text/css" />
        <link rel="shorcut icon" type="image/logo" href="../Assets/Image/Logo 1.png" />
    </head>
<body>
    <?php include '../php_page/Header.php' ?>
    <div class="main-index">
        <div class="container">
        <div class="acc">
            <?= isset($_SESSION['profile']['username']) ? 'Bonjour, ' . $_SESSION['profile']['username']: ''?>   
        </div>
            <div class="row mx-1 my-5"></div>
            <p>Tout d’abord, je vous souhaite la bienvenue sur mon site ( Commençons les choses bien ) ! Je me présente, je me prénomme Jérôme, je suis âgé de 26 ans et je vais vous parler de l’une de mes grandes passions : La Littérature !
                Je dois vous avouer que je suis tombé dedans assez tard finalement, vers la fin de mes années de lycée.<br>
                Et je dois cette passion assez tardive à mon ancien professeur de Français/Histoire-Géo de mon baccalauréat professionnel, Mr Grondin !<br>
                <br>Je tiens à préciser qu’avant ma première, je ne lisais jamais les livres que les professeurs me demandaient de lire. Mais ce professeur, m’a donné la passion de lire. 
                Je vais prendre un exemple tout bête finalement, il nous avait demander de lire « La Peste » d’Albert Camus, livre que j’ai eu beaucoup de mal à finir, car je le rappelle mais c’était le premier que je voulais lire jusqu’à la fin depuis la 6ème. Mais je n’ai jamais lâché et ce livre ne quittait jamais la poche de mon manteau et dès que nous avions un intercours ou un moment tranquille, je me posais pour lire ce livre.
                J’ai reçu pas mal de railleries de la part de mes camarades qui ne comprenaient pas pourquoi je lisais ( mais bon j’étais en bac pro donc je leur en tenais pas rigueur ! ).
                Et depuis ce jour, la lecture de manière générale ne m’a jamais quitté !<br>
                <br>Alors je profite d’en avoir l’occasion ici, mais au cas où si tu passes par ici, je voulais te remercier Thomas de m’avoir donner cette passion.
                J’adore, quand je me trouve sur Paris, me poser aux Jardins des Tuileries, à côté de la fontaine, posais sur une chaise et lire un bon livre et en arrière-plan le bruit de l’eau, si paisible ! <br>
                                                        <br>Bonne visite à tous,
                                                            Jérôme.
           </div>
    </div>
</main>
<?php include '../php_page/Footer.php' ?>