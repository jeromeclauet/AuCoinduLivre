<?php
if(!empty($_GET['id'])){
    $user = new users();
    $user->id = htmlspecialchars($_GET['id']);
    if($user->checkIdUsersExist()){
        $usersInfos = $user->getProfilUsers(); 
     }else {
         $message = 'Une erreur s\'est produite';
    }
}
$user = new users();
$usersInfo = $user->getProfilUsers();
if(isset($_POST['deleteUsers'])){
    //on recupere l'id du client
    $user->id = htmlspecialchars($_GET['id']);
    //et on exécute la requéte de la methode
    $user->deleteProfile();
    header('Location: dashboardIndex.php');
}