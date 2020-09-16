<?php
class article {
    public $id = 0;
    public $name = '';
    public $content = '';
    private $db = NULL;
    private $table = 'm3u0l_articles';
public function __construct(){
    try {
        $this->db = new PDO('mysql:host='. SQL_HOST . ';port=3308;dbname='. SQL_DBNAME .';charset=utf8', SQL_USER , SQL_PWD);
    } catch (Exception $error) {
        die($error->getMessage());
    }
}
//Méthode permettant d'ajouter des articles
public function addArticle(){
    $addArticle = $this->db->prepare(
        'INSERT INTO `m3u0l_articles`(`name`, `content`, `id_m3u0l_comments`)
        VALUES (:name, :content, ?)
        ');
    $addArticle->bindValue(':name', $this->name, PDO::PARAM_STR);
    $addArticle->bindValue(':content', $this->content, PDO::PARAM_STR);
    return $addArticle->execute();
}
//Méthode permettant d'afficher tous les articles de la table m3u0l_articles et de les ranger par ordre de leur id
public function getArticle (){
    $getArticle = $this->db->prepare(
        'SELECT `id`, `name`, `content`
        FROM `m3u0l_articles`
        ORDER BY `id`
        ');
    $getArticle->bindValue(':id', $this->id, PDO::PARAM_INT);
    $getArticle->execute();
    return $getArticle->fetchAll(PDO::FETCH_OBJ);
}
//Méthode permettant de modifier un article via son id
public function modifyArticle(){
    $modifyArticle = $this->db->prepare(
        'UPDATE `m3u0l_articles`
        SET `name` = :name,
        `content` = :content
        WHERE `id` = :id
        ');
        $modifyArticle->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyArticle->bindValue(':name', $this->name, PDO::PARAM_STR);
        $modifyArticle->bindValue(':content', $this->content, PDO::PARAM_STR);
        $modifyArticle->execute();
        return $modifyArticle->fetch(PDO::FETCH_OBJ);
}
//Affichage d'un article via son id 
public function getArticleById(){
    $getAuthorById = $this->db->prepare(
        'SELECT `id`, `name`, `content`, `id_m3u0l_comments`
        FROM `m3u0l_articles`
        WHERE `id` = :id
        ');
        $getAuthorById->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getAuthorById->execute();
}
//Suppresion d'un article via son id
public function deleteArticle(){
    $deleteArticle = $this->db->prepare(
        'DELETE FROM `m3u0l_articles`
        WHERE `id` = :id
        ');
        $deleteArticle->bindValue(':id', $this->id, PDO::PARAM_INT);
        $deleteArticle->execute();
}
}