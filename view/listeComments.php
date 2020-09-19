<?php 
include_once '../config.php';
include '../models/comments.php';
include '../controllers/commentsCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au Coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/style.css" type="text/css" />
        <link rel="shorcut icon" type="image/logo" href="../Assets/Image/Logo 1.png" />
    </head>
    <?php include '../php_page/Header.php';?>
    <body>
    <div class="array">
        <h3 class="ti text-center">Liste des commentaires</h3>
    <table class="table table-striped text-center container">
       <tr>
           <td scope="col">Commentaires :</td>
           <td scope="col">Date :</td>
           <td scope="col">Lien :</td>
       </tr>
   <?php 
    foreach($commentsList as $commentsDetails){ ?>
       <tr>
           <td><?= $commentsDetails->comments ?></td>
           <td><?= $commentsDetails->date ?></td>
           <td><?= $commentsDetails->id_m3u0l_users ?></td>
           <!-- <td><button type="button" class="btn btn-primary"><a class="text-white" href="../view/profilUsers.php?content=../view/listeUsers&id=<?= $commentsDetails->id ?>">Voir le profil</a></button></td> -->
       </tr><?php
    } ?>
</table>
</div>
<?php include '../php_page/Footer.php' ?>