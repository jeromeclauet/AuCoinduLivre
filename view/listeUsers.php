<?php 
include_once '../config.php';
include '../models/Users.php';
include '../controllers/listeUsersCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au Coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale 1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> />
        <link rel="stylesheet" href="../Assets/style.css" type="text/css" /> 
    </head>
    <?php include '../php_page/Header.php';?>
    <body>
    <div class="array">
        <h3 class="ti text-center">Liste des utilisateurs</h3>
    <table class="table table-striped text-center container">
       <tr>
           <td scope="col">Pseudo :</td>
           <td scope="col">Adresse mail :</td>
           <td scope="col">Lien :</td>
       </tr>
   <?php 
    foreach($usersList as $usersDetails){ ?>
       <tr>
           <td><?= $usersDetails->username ?></td>
           <td><?= $usersDetails->mail ?></td>
           <td><button type="button" class="btn btn-primary"><a class="text-white" href="../view/profilUsers.php?content=../view/listeUsers&id=<?= $usersDetails->id ?>">Voir le profil</a></button></td>
       </tr><?php
    } ?>
</table>
</div>
<?php include '../php_page/Footer.php' ?>