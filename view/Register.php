<?php 
include_once '../config.php';
include_once '../models/Users.php';
include_once '../controllers/RegisterCtrl.php';
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
    </head>
<body>
    <?php include '../php_page/Header.php'?>
    <div class="main-inscription">
        <div class="container">
    <fieldset class="ti text-center">Formulaire d'inscription</fieldset>    
    <form action="#" method="POST">
            <div class="text-center">
            <label for="username">Pseudo :</label>
            <input type="text" class="form-control" id="username" name="username" onblur="checkUnavailability(this)"/>
            <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['username'])) { ?>
                <div class="text-danger"><?= $formErrors['username']?></div>
                   <?php }else{ ?>
                    <small id="username" class="form-text text-black">Merci de renseigner votre pseudo</small>
            <?php } ?>
                   </div>
            <div class="text-center">
                <label for="mail">Adresse Mail :</label>
                <input type="email" class="form-control" id="mail" name="mail" onblur="checkUnavailability(this)"/>
            <?php if (isset($formErrors['mail'])) { ?>
                <div class="text-danger"><?= $formErrors['mail']?></div>
                    <?php }else{ ?>
                    <small id="mail" class="form-text text-black">Merci de renseigner votre adresse mail</small>
            <?php } ?>
                    </div>
            <div class="text-center">
                <label for="password">Mot de Passe :</label>
                <input class="form-control" type="password" id="password" name="password">
            <?php if (isset($formErrors['password'])) { ?>
                <div class="text-danger"><?= $formErrors['password']?></div>
                    <?php }else{ ?>
                    <small id="password" class="form-text text-black">Merci de renseigner votre mot de passe</small>
            <?php } ?>
                    </div>
            <div class="text-center">
                    <label for="passwordVerify">Mot de Passe (Confirmation) :</label>
                    <input type="password" class="form-control" id="passwordVerify" name="passwordVerify">
            <?php if (isset($formErrors['passwordVerify'])) { ?>
                    <div class="text-danger"><?= $formErrors['passwordVerify']?></div>
                    <?php }else{ ?>
                    <small id="passwordVerify" class="form-text text-black">Merci de confirmer votre mot de passe</small>
            <?php } ?>
                    </div>
        <div class="bu text-center">
            <button class="btn btn-warning" type="submit" name="addUsers">S'inscrire</button>      
        </div>
    </form>
        <!-- TERNAIRE qui permet d'afficher en haut de la page, si le formulaire a été accepté ou non. -->
        <p class="text-center"><?= isset($addUserMessage) ? $addUserMessage : '' ?></p>
            </div>
        </div>
    </div>
</div>
</main>
    <?php include '../php_page/Footer.php' ?>