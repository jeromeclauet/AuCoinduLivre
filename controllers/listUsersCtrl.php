<?php
$users = new users();
$usersList = $users->getUsersList();
$deleteUser = new users ();
if(isset($_POST['deleteUser'])){
    $deletUser->id = htmlspecialchars($_POST['recipient-name']);
    $deleteUser->deleteProfile();
}