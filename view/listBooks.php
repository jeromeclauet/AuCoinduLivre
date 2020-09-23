<?php
session_start();
include_once '../config.php';
include '../models/books.php';
include '../controllers/listBooksCtrl.php';
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
        <h3 class="ti text-center">Liste des livres</h3>
        <div class="but">
        <button type="button" class="btn btn-warning" href="../view/addBook.php">Ajouter un livre</button>
        </div>
    <table class="table table-striped text-center container">
       <tr>
           <td scope="col">Titre :</td>
           <td scope="col">Date de sortie :</td>
           <td scope="col">Nombre de pages :</td>
           <td scope="col">Editeur :</td>
           <td scope="col">Collection :</td>
           <td scope="col">Lien :</td>
       </tr>
   <?php 
    foreach($bookList as $bookDetails){ ?>
       <tr>
           <td><?= $bookDetails->title ?></td>
           <td><?= $bookDetails->releasedate ?></td>
           <td><?= $bookDetails->pagenumber ?></td>
           <td><?= $bookDetails->editor ?></td>
           <td><?= $bookDetails->collection ?></td>
           <td><button type="button" class="btn btn-warning"><a class="text-white" href="../view/book.php?content=../view/listBooks&id=<?= $bookDetails->id ?>">Voir le livre</a></button></td>
       </tr><?php
    } ?>
</table>
</div>
<?php include '../php_page/Footer.php' ?>