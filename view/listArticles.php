<?php 
session_start();
include_once '../config.php';
include '../models/articles.php';
include '../controllers/listArticlesCtrl.php';
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
                    <a class="nav-link text-white" href="../view/listArticles.php">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Livres
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../view/listBooks.php">Livres</a>
                    <a class="dropdown-item" href="../view/listGenders.php">Genres</a>
                    <a class="dropdown-item" href="../view/listAuthors.php">Auteurs</a>
                </div>
                </li>  
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/listUsers.php">Utilisateurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/listComments.php">Commentaires</a>
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
    <div class="array">
        <h3 class="ti text-center">Liste des articles</h3>
    <table class="table table-striped text-center container">
       <tr>
           <td scope="col">Titre :</td>
           <td scope="col">Contenu :</td>
           <td scope="col">Modifier :</td>
           <td scope="col">Supprimer :</td>
       </tr>
       <?php 
    foreach($articlesList as $articlesDetails){ ?>
       <tr>
           <td><?= $articlesDetails->name ?></td>
           <td><?= $articlesDetails->content ?></td>
           <td><button type="button" class="btn btn-warning"><a class="text-white" href="../view/articles.php?content=../view/listArticles&id=<?= $articlesDetails->id ?>">Voir le contenu</a></button></td>
       </tr><?php
    } ?>
</table>
</div>
<?php include '../php_page/Footer.php' ?>