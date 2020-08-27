<?php
class users {
    public $id = 0;
    public $username = '';
    public $mail = '';
    public $password = '';
    private $db = NULL;
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host=localhost;port=3308;dbname=aucoindulivre;charset=utf8', 'root', '');
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
    public function checkUserExist(){
        $checkUserExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isUserExist`
            FROM `m3u0l_users`
            WHERE `username` = :username AND `mail` = :mail AND `password` = :password');
        $checkUserExistQuery->bindValue(':username', $this->username, PDO::PARAM_STR);
        $checkUserExistQuery->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $checkUserExistQuery->bindValue(':password', $this->password, PDO::PARAM_STR);
        $checkUserExistQuery->execute();
        $data = $checkUserExistQuery->fetch(PDO::FETCH_OBJ);
        return $data->isUserExist;
    }
    // // public function checkMailExist(){
    //     $checkMailExistQuery = $this->db->prepare(
    //         'SELECT COUNT(`mail`) AS `isMailExist`
    //         FROM `m3u0l_users`
    //         WHERE `mail` = :mail');
    //     $checkMailExistQuery->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    //     $checkMailExistQuery->execute();
    //     $data = $checkMailExistQuery->fetch(PDO::FETCH_OBJ);
    //     return $data->isMailExist;
    // }
    public function addUserInfos(){
        $registerNewUserQuery = $this->db->prepare(
            'INSERT INTO `m3u0l_users` (`username`, `mail`, `password`,`id_m3u0l_usersRoles`)
            VALUES (:username, :mail, :password, 2)'
        );
        $registerNewUserQuery->bindValue(':username', $this->username, PDO::PARAM_STR);
        $registerNewUserQuery->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $registerNewUserQuery->bindValue(':password', $this->password, PDO::PARAM_STR);
        return $registerNewUserQuery->execute();
    }
//     // public function getUserInfo(){
//         $getUserInfoQuery = $this->db->prepare(
//             'SELECT `username`, `mail`
//             FROM `m3u0l_users`
//             WHERE `id` = :id'
//         );
//         $getUserInfoQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
//         $getUserInfoQuery->execute();
//         return $getUserInfoQuery->fetch(PDO::FETCH_OBJ);
//     }
//     // public function getUserPassword(){
//         $checkUserPasswordQuery = $this->db->prepare(
//             'SELECT `password`
//             FROM `m3u0l_users`
//             WHERE `username` = :username'
//         );
//         $checkUserPasswordQuery->bindValue(':username', $this->username, PDO::PARAM_STR);
//         $checkUserPasswordQuery->execute();
//         $data = $checkUserPasswordQuery->fetch(PDO::FETCH_OBJ);
//         $this->password = $data->password;
//     }
}