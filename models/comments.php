<?php
class comment {
    public $id = 0;
    public $comments = '';
    public $date = '0000-00-00';
    private $db = NULL;
    private $table = 'm3u0l_comments';
public function __construct(){
    try {
        $this->db = new PDO('mysql:host='. SQL_HOST . ';port=3308;dbname='. SQL_DBNAME .';charset=utf8', SQL_USER , SQL_PWD);
    } catch (Exception $error) {
        die($error->getMessage());
    }
}
//Méthode permettant d'ajouter des commentaires
public function addComment(){
    $addComment = $this->db->prepare(
        'INSERT INTO m3u0l_comments ( `comments`, `date`, `id_m3u0l_users` ) 
        VALUES ( ?, NOW(), ? )'
    );
    $addComment->bindValue(':comments', $this->comments, PDO::PARAM_STR);
    $addComment->bindValue(':date', $this->date, PDO::PARAM_STR);
    return $addComment->execute();
}
//Méthode permettant d'afficher tous les commentaires de la table m3u0l_comments et de les ranger par ordre de leur id
public function getComment(){
    $getComment = $this->db->prepare(
        'SELECT `id`, `comments`, `date`, `id_m3u0l_users`
        FROM `m3u0l_comments`
        ORDER BY `id`
        ');
    $getComment->bindValue(':id', $this->id, PDO::PARAM_INT);
    $getComment->execute();
    return $getComment->fetchAll(PDO::FETCH_OBJ);
}
//Méthode permettant de modifier un commentaire via son id
public function modifyComment(){
    $modifyComment = $this->db->prepare(
        'UPDATE `m3u0l_comments`
        SET `comments` = :comments
        WHERE `id` = :id
        ');
        $modifyComment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyComment->bindValue(':comments', $this->comments, PDO::PARAM_STR);
        $modifyComment->execute();
        return $modifyComment->fetch(PDO::FETCH_OBJ);
}
//Affichage d'un commentaire via son id 
public function getCommentById(){
    $getCommentById = $this->db->prepare(
        'SELECT `id`, `comments`, `date`, `id_m3u0l_users`
        FROM `m3u0l_comments`
        WHERE `id` = :id
        ');
        $getCommentById->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getCommentById->execute();
}
//Suppresion d'un commentaire via son id
public function deleteComment(){
    $deleteComment = $this->db->prepare(
        'DELETE FROM `m3u0l_comments`
        WHERE `id` = :id
        ');
        $deleteComment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $deleteComment->execute();
}
}