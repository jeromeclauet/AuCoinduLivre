<?php
class gender {
    public $id = 0;
    public $name = '';
    private $db = NULL;
    private $table = 'm3u0l_genders';
public function __construct(){
    try {
        $this->db = new PDO('mysql:host='. SQL_HOST . ';port=3308;dbname='. SQL_DBNAME .';charset=utf8', SQL_USER , SQL_PWD);
    } catch (Exception $error) {
        die($error->getMessage());
    }
}
//Méthode permettant d'ajouter un genre
public function addGender(){
    $addGender = $this->db->prepare(
        'INSERT INTO `m3u0l_genders`(`name`)
        VALUES (:name)
        ');
    $addGender->bindValue(':name', $this->name, PDO::PARAM_STR);
    return $addGender->execute();
}
//Méthode permettant d'afficher tous les genres de la table m3u0l_genders et de les ranger par ordre de leur id
public function getGender (){
    $getGender = $this->db->prepare(
        'SELECT `id`, `name`
        FROM `m3u0l_genders`
        ORDER BY `id`
        ');
    $getGender->bindValue(':id', $this->id, PDO::PARAM_INT);
    $getGender->execute();
    return $getGender->fetchAll(PDO::FETCH_OBJ);
}
//Méthode permettant de modifier un genre via son id
public function modifyGender(){
    $modifyGender = $this->db->prepare(
        'UPDATE `m3u0l_genders`
        SET `name` = :name
        WHERE `id` = :id
        ');
        $modifyGender->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyGender->bindValue(':name', $this->name, PDO::PARAM_STR);
        $modifyGender->execute();
        return $modifyGender->fetch(PDO::FETCH_OBJ);
}
//Affichage d'un genre via son id 
public function getGenderById(){
    $getGenderById = $this->db->prepare(
        'SELECT `id`, `name`
        FROM `m3u0l_genders`
        WHERE `id` = :id
        ');
        $getGenderById->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getGenderById->execute();
}
//Suppresion d'un genre via son id
public function deleteGender(){
    $deleteGender = $this->db->prepare(
        'DELETE FROM `m3u0l_genders`
        WHERE `id` = :id
        ');
        $deleteGender->bindValue(':id', $this->id, PDO::PARAM_INT);
        $deleteGender->execute();
}
}