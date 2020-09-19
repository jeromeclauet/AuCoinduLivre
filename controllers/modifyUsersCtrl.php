<?php
$formErrors = array();
if(isset($_POST['modify'])){
    $modifyUsers = new users();
    $modifyUsers->id = $modifyUser;
    if(!empty($_POST['username'])){
        //J'hydrate mon instance d'objet $modifyUsers.
        $modifyUsers->username = htmlspecialchars($_POST['username']); 
        } else {
            $formErrors['username'] = 'Votre pseudo ne doit pas être vide';
        }
    if (!empty($_POST['mail'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $modifyUsers->mail = htmlspecialchars($_POST['mail']);
        } else {
            $formErrors['mail'] = 'Votre mail n\'est pas valide';
        }
    } else {
    $formErrors['mail'] = 'Votre mail ne doit pas être vide.';
    }
    if (empty($formErrors)){
        //Si c'est bon on ajoute l'utilisateur
        $modifyUserMessage = 'L\'utilisateur a bien été modifié.';
       }
       $modifyUser->modifyUserProfile();
    }