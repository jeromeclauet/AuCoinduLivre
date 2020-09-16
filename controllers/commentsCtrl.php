<?php
//Vérification du formulaire de connexion
$formErrors = [];
if(isset($_POST['submit_commentaire'])){
    $comment = new comments();
    if(!empty($_POST['pseudo'])){
        if(filter_var($_POST['pseudo']))
        //J'hydrate mon instance d'objet comment
        $comment->pseudo = htmlspecialchars($_POST['pseudo']);
    }else{
        $formErrors['pseudo'] = 'Le pseudo doit exister.';
    }
    }else{
        $formErrors['pseudo'] = 'Le pseudo ne doit pas être vide.';
    }