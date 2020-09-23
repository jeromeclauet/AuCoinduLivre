<?php
if(isset($_GET['id'])){
    $formErrors = array();
    $modifyUsers = new users();
    $modifyUsers->id = $_GET['id'];
    if(isset($_POST['modify'])){
        if(!empty($_POST['username'])){
            //J'hydrate mon instance d'objet $modifyUsers.
            $modifyUsers->username = htmlspecialchars($_POST['username']);
            // htmlspecialchars protége de la faille XSS 
            } else {
                $formErrors['username'] = 'Votre pseudo ne doit pas être vide';
            }
        if (empty($formErrors)){
            if($modifyUsers->modifyUsernameProfile()){
            //Si c'est bon on ajoute l'utilisateur
            $modifyUserMessage = 'L\'utilisateur a bien été modifié.';
        }else{
            $modifyUserMessage = 'Une erreur est survenue';
        }
        }
    }
    if(isset($_POST['modifyMail'])){
        if (!empty($_POST['mail'])) {
            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $modifyUsers->mail = htmlspecialchars($_POST['mail']);
            } else {
                $formErrors['mail'] = 'Votre mail n\'est pas valide';
            }
        } else {
        $formErrors['mail'] = 'Votre mail ne doit pas être vide.';
        }
    if(empty($formErrors)){
        if($modifyUsers->modifyUserMail()){
            $modifyUserMessage= 'L\'utilisateur a bien été modifié.';
        }else{
    $modifyUserMessage = 'Une erreur est survenue.';
        }
        }
    }
}