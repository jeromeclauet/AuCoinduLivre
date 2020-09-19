<?php
if(!empty($_GET['id'])){
    $deleteUsers = new users();
    $deleteUsers->id = htmlspecialchars($_GET['id']);
    //si je valide la suppression
if($deleteUsers->checkIdUsersExist()){
    //j'hydrate
    $deleteInfo = $deleteUsers->deleteProfile();
}
}