<?php
$formErrors = array();
//On vérifie le bouton du formulaire
if (isset($_POST['addUsers'])) {
    //on créer une nouvelle variable qui appelle la classe.
    $user = new users();
    $isPasswordOk = true;
        if(!empty($_POST['username'])) {
            //J'hydrate mon instance d'objet $user.
            $user->username = htmlspecialchars($_POST['username']); 
            } else {
                $formErrors['username'] = 'Votre pseudo ne doit pas être vide';
            }
if (!empty($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $user->mail = htmlspecialchars($_POST['mail']);
    } else {
        $formErrors['mail'] = 'Votre mail n\'est pas valide';
    }
} else {
    $formErrors['mail'] = 'Votre mail ne doit pas être vide.';
}
if(empty($_POST['password'])){
    $formErrors['password'] = 'Le mot de passe ne doit être pas vide.';
    $isPasswordOk = false;
}
if(empty($_POST['passwordVerify'])){
    $formErrors['passwordVerify'] = 'Le mot de passe de confirmation ne doit pas être vide.';
    $isPasswordOk = false;
}
//Si les vérifications des mots de passe sont ok
if($isPasswordOk){
    if($_POST['passwordVerify'] == $_POST['password']){
        //On hash le mot de passe avec la méthode de PHP
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }else{
        $formErrors['password'] = $formErrors['passwordVerify'] = 'Les mots de passe ne sont pas identiques.';
    }
}
if(empty($formErrors)){
    $isOk = true;
    //On vérifie si le pseudo est libre
    if($user->checkUserUnavailabilityByFieldName(['username'])){
        $formErrors['username'] = 'Le pseudo est déjà utilisé.';
        $isOk = false;
    }
    //On vérifie si le mail est libre
    if($user->checkUserUnavailabilityByFieldName(['mail'])){
        $formErrors['mail'] = 'L\'adresse mail est déjà utilisée.';
        $isOk = false;
    }
    //Si c'est bon on ajoute l'utilisateur
    if ($user->addUserInfos()){
            $addUserMessage = 'L\'utilisateur est bien enregistré.';
        }else{
            $addUserMessage = 'Une erreur est survenue lors de l\'enregistrement';
        }
    }
}
//Traitement de la demande AJAX
if(isset($_POST['fieldValue'])){
    //On vérifie que l'on a bien envoyé des données en POST
    if(!empty($_POST['fieldValue']) && !empty($_POST['fieldName'])){
        //On inclut les bons fichiers car dans ce contexte ils ne sont pas connu.
        include_once '../config.php';
        include_once '../models/Users.php';
        $user = new users();
        $input = htmlspecialchars($_POST['fieldName']);
        $user->$input = htmlspecialchars($_POST['fieldValue']);
        //Le echo sert à envoyer la réponse au JS
        echo $user->checkUserUnavailabilityByFieldName([htmlspecialchars($_POST['fieldName'])]);
    }else{
        echo 2;
    }
}