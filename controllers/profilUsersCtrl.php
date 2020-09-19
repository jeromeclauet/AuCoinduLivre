<?php
if(!empty($_GET['id'])){
    $user = new users();
    $user->id = htmlspecialchars($_GET['id']);
    if($user->checkIdUsersExist()){
        $usersInfo = $user->getProfilUsers(); 
     }else {
         $message = 'Une erreur s\'est produite';
    }
    }