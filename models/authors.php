<?php
class author {
    public $id = 0;
    public $lastNameAuthor = '';
    public $firstNameAuthor = '';
    private $db = NULL;
    private $table = 'm3u0l_authors';
public function __construct(){
    try {
        $this->db = new PDO('mysql:host='. SQL_HOST . ';port=3308;dbname='. SQL_DBNAME .';charset=utf8', SQL_USER , SQL_PWD);
    } catch (Exception $error) {
        die($error->getMessage());
    }
}
//Méthode permettant d'ajouter des auteurs
public function addAuhtor(){
    $addAuthor = $this->db->prepare(
        'INSERT INTO `m3u0l_authors`(`lastNameAuthor`, `firstNameAuthor`)
        VALUES (:lastNameAuthor, :firstNameAuthor)
        ');
    $addAuthor->bindValue(':lastNameAuthor', $this->lastNameAuthor, PDO::PARAM_STR);
    $addAuthor->bindValue(':firstNameAuthor', $this->firstNameAuthor, PDO::PARAM_STR);
    return $addAuthor->execute();
}
//Méthode permettant d'afficher tous les auteurs de la table m3u0l_authors et de les ranger par ordre de leur id
public function getAuthor (){
    $getAuthor = $this->db->prepare(
        'SELECT `id`, `lastNameAuthor`, `firstNameAuthor`
        FROM `m3u0l_authors`
        ORDER BY `id`
        ');
    $getComment->bindValue(':id', $this->id, PDO::PARAM_INT);
    $getComment->execute();
    return $getComment->fetchAll(PDO::FETCH_OBJ);
}
//Méthode permettant de modifier un auteur via son id
public function modifyAuthor(){
    $modifyAuthor = $this->db->prepare(
        'UPDATE `m3u0l_authors`
        SET `lastNameAuthor` = :lastNameAuthor,
        `firstNameAuthor` = :firstNameAuthor
        WHERE `id` = :id
        ');
        $modifyAuthor->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyAuthor->bindValue(':lastNameAuthor', $this->lastNameAuthor, PDO::PARAM_STR);
        $modifyAuthor->execute();
        return $modifyAuthor->fetch(PDO::FETCH_OBJ);
}
//Affichage d'un auteur via son id 
public function getAuthorById(){
    $getAuthorById = $this->db->prepare(
        'SELECT `id`, `lastNameAuthor`, `firstNameAuthor`
        FROM `m3u0l_authors`
        WHERE `id` = :id
        ');
        $getAuthorById->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getAuthorById->execute();
}
//Suppresion d'un auteur via son id
public function deleteAuthor(){
    $deleteAuthor = $this->db->prepare(
        'DELETE FROM `m3u0l_authors`
        WHERE `id` = :id
        ');
        $deleteAuthor->bindValue(':id', $this->id, PDO::PARAM_INT);
        $deleteAuthor->execute();
}
}