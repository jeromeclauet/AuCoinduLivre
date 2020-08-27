<?php 
require_once 'Users.php';
require_once 'usersCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Au Coin du Livre</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale 1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> />
        <link rel="stylesheet" href="Assets/style.css" type="text/css" />
    </head>
<body>
    <?php include 'php_page/Header.php' ?>
    <div class="main-inscription">
        <div class="container">
    <fieldset class="ti text-center">Formulaire d'inscription</fieldset>    
    <form method="POST">
            <div class="text-center">
            <label for="username">Pseudo :</label>
            <input type="text" id="username" name="username" placeholder="Jeje">
            <?php //formErrors qui affiche une erreur si le champ est mal rempli.
            if (isset($formErrors['username'])) { ?>
                <div><?= $formErrors['username'];
                    } ?></div>
            <div class="text-center">
            <label for="mail">Adresse Mail :</label>
            <input type="text" id="mail" name="mail" placeholder="jejej@outlook.com">
            <?php if (isset($formErrors['mail'])) { ?>
                <div><?= $formErrors['mail'];
                    } ?></div>
        <div class="text-center">
            <label for="password">Mot de Passe :</label>
            <input type="password" id="password" name="password">
            <?php if (isset($formErrors['password'])) { ?>
                <div><?= $formErrors['password'];
                    } ?></div>
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
    <?php include 'php_page/Footer.php' ?>