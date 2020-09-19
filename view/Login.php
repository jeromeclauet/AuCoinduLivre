<?php
session_start();
include_once '../config.php';
include_once '../models/Users.php';
include_once '../controllers/loginCtrl.php';
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
<body>
    <?php include '../php_page/Header.php' ?>
    <div class="main-connexion">
        <div class="container">
    <fieldset class="ti text-center">Formulaire de connexion</fieldset>    
    <form action="#" method="POST">
            <div class="text-center">
            <label for="mail">Adresse Mail :</label>
            <input type="email" class="form-control" id="mail" name="mail"/>
            <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['mail'])) { ?>
                <div class="text-danger"><?= $formErrors['mail']?></div>
                   <?php }else{ ?>
                    <small id="mail" class="form-text text-black">Merci de renseigner votre mail</small>
            <?php } ?>
                   </div>
            <div class="text-center">
                <label for="password">Mot de Passe :</label>
                <input type="password" class="form-control" id="password" name="password"/>
            <?php if (isset($formErrors['password'])) { ?>
                <div class="text-danger"><?= $formErrors['password']?></div>
                    <?php }else{ ?>
                    <small id="password" class="form-text text-black">Merci de renseigner votre adresse mail</small>
            <?php } ?>
                </div>
        </div>
                <div class="bu text-center">
                    <button type="submit" name="login" class="btn btn-warning">Connexion</button>
                </div>
                    </div>
    <?php include '../php_page/Footer.php' ?>