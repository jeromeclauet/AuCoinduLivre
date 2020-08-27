<?php
//la regexAge permet de sécuriser la date de naissance 
$regexUserName = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';
$regexPassword = '%^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$%';
$formErrors = array();
//
if (isset($_POST['addUsers'])) {
    //on créer une variable qui appelle la classe.
    $user = new users();
        if(!empty($_POST['username'])) {
                    //On vérifie la correspondance entre la regex et ce qu'il a été écrit dans l'input du lastName.
            if (preg_match($regexUserName, $_POST['username'])){
        //htmlspecialchars = permet que les input n'est pas la capacité d'insérer d'attributs (les balises, ça va compromettre la sécurité. Genre un <p>dans prénom</p>)
        //$patient->lastName : permet de récupérer l'attribut dans la classe. 
            $user->username = htmlspecialchars($_POST['username']); 
            } else {
                $formErrors['username'] = 'Votre pseudo n\'est pas valide';
        }
    } else {
        $formErrors['username'] = 'Votre pseudo n\'est pas renseigné';
    }
if (!empty($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $user->mail = htmlspecialchars($_POST['mail']);
    } else {
        $formErrors['mail'] = 'Votre mail n\'est pas valide';
    }
} else {
    $formErrors['mail'] = 'Votre mail n\'est pas renseigné';
}
if (!empty($_POST['password'])) {
    if (preg_match($regexPassword, $_POST['password'])) {
        $user->password = htmlspecialchars($_POST['password']);
    } else {
        $formErrors['password'] = 'Veuillez renseigner un mot de passe valide';
    }    
} else {
        $formErrors['password'] = 'Votre mot de passe n\'est pas renseigné';
    }
    if(empty($formErrors)) {
        if(!$user->checkUserExist()){
            if($user->addUserInfos()){
               $addUserMessage = 'L\'utilisateur a bien été ajouté.'; 
            }else{
                $addUserMessage = 'Une erreur est survenue.';
            }
        }else{
            $addUserMessage = 'L\'utilisateur existe déjà.';
        }
    }
}