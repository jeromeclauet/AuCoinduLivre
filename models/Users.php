<?php
//la  class est la définition de l'objet.
// private : accessible uniquement dans la class.
// protected : accessible dans la class et les enfants.
// public : dispo dans class enfant et dans les instances. 
class users {
    public $id = 0;
    public $username = '';
    public $mail = '';
    public $password = '';
    private $db = NULL;
    private $table = 'm3u0l_users';
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host='. SQL_HOST . ';port=3308;dbname='. SQL_DBNAME .';charset=utf8', SQL_USER , SQL_PWD);
        } catch (Exception $error) {
            die($error->getMessage());
        }
    }
    //Méthode permettant d'ajouter un utilisateur via le formulaire d'inscription.
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
    //Méthode permettant de vérifier si l'utilisateur existe.
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
    //Méthode permettant de savoir si une valeur du champ existe déjà.
    public function checkUserUnavailabilityByFieldName($field){
        $whereArray = [];
        foreach($field as $fieldName ){
            $whereArray[] = '`' . $fieldName . '` = :' . $fieldName;
        }
        $where = ' WHERE ' . implode(' AND ', $whereArray);
        $checkUserUnavailabilityByFieldName = $this->db->prepare('
            SELECT COUNT(`id`) as `isUnavailable`
            FROM ' . $this->table 
            . $where
        ); 
        foreach($field as $fieldName ){
            $checkUserUnavailabilityByFieldName->bindValue(':'.$fieldName,$this->$fieldName,PDO::PARAM_STR);
        }
        $checkUserUnavailabilityByFieldName->execute();
        return $checkUserUnavailabilityByFieldName->fetch(PDO::FETCH_OBJ)->isUnavailable;
    }
    //Méthode permettant d'afficher la liste complète des utilisateurs.
        public function getUsersList() {
            $getUsersListQuery = $this->db->prepare(
                'SELECT `id`, `username`, `mail`, `id_m3u0l_usersRoles`
                FROM `m3u0l_users`
                ORDER BY `username`');
            $getUsersListQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
            $getUsersListQuery->bindValue(':username', $this->username, PDO::PARAM_STR);
            $getUsersListQuery->bindValue(':mail', $this->mail, PDO::PARAM_STR);
            $getUsersListQuery->execute();
            return $getUsersListQuery->fetchAll(PDO::FETCH_OBJ);
        }
    //Méthode permettant d'afficher le profil d'un utilisateur via son id.
    public function getUserInfo(){
        $getUserInfoQuery = $this->db->prepare(
            'SELECT `username`, `mail`
            FROM `m3u0l_users`
            WHERE `id` = :id'
        );
        $getUserInfoQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getUserInfoQuery->execute();
        return $getUserInfoQuery->fetch(PDO::FETCH_OBJ);
    }
    //Méthode permettant de vérifier si l'id utilisateur existe.
    public function checkIdUsersExist() {
        $checkIdUsersExistQuery = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isIdUsersExist`
            FROM `m3u0l_users` 
            WHERE `id` = :id'
        );
        $checkIdUsersExistQuery->bindvalue(':id', $this->id, PDO::PARAM_INT);
        $checkIdUsersExistQuery->execute();
        $data = $checkIdUsersExistQuery->fetch(PDO::FETCH_OBJ);
        return $data->isIdUsersExist; 
    }
    //Méthode permettant d'afficher la page profil utilisateur en récupérant l'id.
    public function getProfilUsers() {
        $getProfilUsersQuery = $this->db->prepare(
            'SELECT `id`,`username`, `mail`
            FROM `m3u0l_users`
            WHERE `id` = :id'
        );
        $getProfilUsersQuery->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getProfilUsersQuery->execute();
        return $getProfilUsersQuery->fetch(PDO::FETCH_OBJ);
    }
    //Méthode permettant de récupérer le hachage du mot de passe de l'utilisateur.
    public function getUserPasswordHash(){
        $getUserPasswordHash = $this->db->prepare(
            'SELECT `password` 
            FROM ' . $this->table 
            . ' WHERE `mail` = :mail'
        );
        $getUserPasswordHash->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $getUserPasswordHash->execute();
        $response = $getUserPasswordHash->fetch(PDO::FETCH_OBJ);
        if(is_object($response)){
            return $response->password;
        }else{
            return '';
        }
}
//Méthode permettant d'avoir toutes les infos de l'utilisateur
public function getUserProfile(){
    $getUserProfile = $this->db->prepare(
        'SELECT `id`, `username`, `id_m3u0l_usersRoles` AS `role`
        FROM ' . $this->table 
        . ' WHERE `mail` = :mail'
    );
    $getUserProfile->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $getUserProfile->execute();
    return $getUserProfile->fetch(PDO::FETCH_OBJ);
}
//Méthode permettant de modifier le profil d'un utilisateur
public function modifyUserProfile(){
    $modifyUsers = $this->db->prepare(
        'UPDATE `m3u0l_users`
        SET `username` = :username,
        `mail` = :mail,
        `password` = $this->password
        WHERE `id` = :id'
    );
    $modifyUsers->bindValue(':username', $this->username, PDO::PARAM_STR);
    $modifyUsers->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $modifyUsers->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $modifyUsers->execute();
}
//Méthode permettant de supprimer le profil d'un utilisateur
public function deleteProfile(){
    $deleteUsers = $this->db->prepare(
        'DELETE FROM `m3u0l_users`
        WHERE `id` = :id'
    );
    $deleteUsers->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $deleteUsers->execute();
}
}