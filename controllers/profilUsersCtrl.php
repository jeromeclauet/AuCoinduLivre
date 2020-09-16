<?php
if(!empty($_GET['id'])){
    $user = new users();
    $user->id = htmlspecialchars($_GET['id']);
    if($user->checkIdUsersExist()){
        // $appointments = new appointments();
        // $appointments->idPatients = $patient->id;
        // $appointmentList = $appointments->getAppointmentListById();
        $usersInfo = $user->getProfilUsers(); 
     }else {
         $message = 'Une erreur s\'est produite';
    }
    }