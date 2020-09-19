<?php 
session_start();
include_once '../config.php';
include '../models/Users.php';
include '../controllers/modifyUsersCtrl.php';
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
    <div class="main-inscription">
        <div class="container">
    <fieldset class="ti text-center">Formulaire de modification</fieldset>  
    <form action="" method="POST">
            <div class="text-center">
            <label for="username">Pseudo :</label>
            <input type="text" class="form-control" id="username" name="username"/>
            <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['username'])) { ?>
                <div class="text-danger"><?= $formErrors['username']?></div>
                   <?php }else{ ?>
                    <small id="username" class="form-text text-black">Merci de renseigner votre pseudo</small>
            <?php } ?>
                   </div>
            <div class="text-center">
                <label for="mail">Adresse Mail :</label>
                <input type="email" class="form-control" id="mail" name="mail"/>
            <?php if (isset($formErrors['mail'])) { ?>
                <div class="text-danger"><?= $formErrors['mail']?></div>
                    <?php }else{ ?>
                    <small id="mail" class="form-text text-black">Merci de renseigner votre adresse mail</small>
            <?php } ?>
                    </div>
        <div class="bu text-center">
            <button class="btn btn-warning" type="submit" name="modify">Modifier le profil</button>      
        </div>
    </form>
        <!-- TERNAIRE qui permet d'afficher en haut de la page, si le formulaire a été accepté ou non. -->
        <p class="text-center"><?= isset($modifyUserMessage) ? $modifyUserMessage : '' ?></p>
            </div>
        </div>
    </div>
</div>
</main>
<?php include '../php_page/Footer.php' ?>