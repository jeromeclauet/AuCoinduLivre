<?php 
session_start();
include_once '../config.php';
include '../models/Users.php';
include '../controllers/profilUsersCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au Coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale 1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/style.css" type="text/css" /> 
        <link rel="shorcut icon" type="image/logo" href="../Assets/Image/Logo 1.png" />
    </head>
    <?php include '../php_page/Header.php';?>
    <body>
    <div class="profil">
    <h3 class="ti text-center">Fiche Utilisateur</h3>
    <?php if(isset($usersInfo)){ ?>
        <p class="text-center">Pseudo :<?= $usersInfo->username ?></p>
        <p class="text-center">Adresse mail : <?= $usersInfo->mail ?></p><?php
    }else { ?>
    <p class="text-center"><?= $message ?></p><?php
    } ?>
    </div>
</div>
<?php include '../php_page/Footer.php';?>