<?php 
session_start();
include_once '../config.php';
include '../models/Users.php';
include '../controllers/profilUsersCtrl.php';
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
    <header class="img-fluid mb-n2">
    <h1>Au Coin du Livre</h1>
</header>
    <nav class="navbar navbar-expand-lg  navbar-dark stickyNav nav_background">
        <a class="navbar-brand d-md-none" href="#">Tableau de bord</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center nav_background" id="navbarSupportedContent">
            <ul id="navUl" class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../view/dashboardIndex.php">Tableau de bord<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/articles.php">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Livres/Genres
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../view/livres.php">Livres</a>
                    <a class="dropdown-item" href="../view/genres.php">Genres</a>
                </div>
                </li>  
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/listeUsers.php">Utilisateurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/commentaires.php">Commentaires</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mon compte
                </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if(isset($_SESSION['profile']['role'])){ 
                    if($_SESSION['profile']['role'] == '1'){ ?>
                        <a class="dropdown-item" href="../view/dashboardIndex.php">Tableau de bord</a>
                        <a class="dropdown-item" href="Accueil.php?action=disconnect">Déconnexion</a> 
                    <?php }else{ ?>                        
                    <a class="dropdown-item" href="Accueil.php?action=disconnect">Déconnexion</a>
                    <?php } ?>
                <?php }else{ ?>                
                    <a class="dropdown-item" href="Login.php?view=login">Connexion</a>
                    <a class="dropdown-item" href="Register.php?view=register">Inscription</a>
            <?php } ?>    
            </div>
                </li>      
            </ul>
        </div>
    </nav>
<body>
<div class="profil">
    <form action="../view/modifyUsers.php" method="POST">
    <h3 class="ti text-center">Profil utilisateur</h3>
        <p class="text-center">Pseudo :<?= $usersInfo->username ?></p>
        <p class="text-center">Adresse mail : <?= $usersInfo->mail ?></p>
    <div class="text-center">
        <button type="submit" name="beginModify" value="<?= $usersInfo->id ?>" class="btn btn-warning">Modifier l'utilisateur</button> 
    </div>
                </div>
<?php include '../php_page/Footer.php';?>