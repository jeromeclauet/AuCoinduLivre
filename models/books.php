<?php
class book {
    public $id = 0;
    public $title = '';
    public $releasedate = '0000-00-00';
    public $pagenumber = 0;
    public $editor = '';
    public $collection = '';
    private $db = NULL;
    private $table = 'm3u0l_books';
public function __construct(){
    try {
        $this->db = new PDO('mysql:host='. SQL_HOST . ';port=3308;dbname='. SQL_DBNAME .';charset=utf8', SQL_USER , SQL_PWD);
    } catch (Exception $error) {
        die($error->getMessage());
    }
}
//Méthode permettant d'ajouter des livres
public function addBook(){
    $addBook = $this->db->prepare(
        'INSERT INTO `m3u0l_books`(`title`, `releasedate`, `pagenumber`, `editor`, `collection`, `id_m3u0l_articles`, `id_m3u0l_genders`, `id_m3u0l_authors`, `id_m3u0l_notation`)
        VALUES (:title, :releasedate, ?, :editor, :collection, ?, ?, ?, ?)
        ');
    $addBook->bindValue(':title', $this->title, PDO::PARAM_STR);
    $addBook->bindValue(':releasedate', $this->releasedate, PDO::PARAM_STR);
    $addBook->bindValue(':pagenumber', $this->pagenumber, PDO::PARAM_INT);
    $addBook->bindValue(':editor', $this->editor, PDO::PARAM_STR);
    $addBook->bindValue(':collection', $this->collection, PDO::PARAM_STR);
    return $addBook->execute();
}
//Méthode permettant d'afficher tous les livres de la table m3u0l_books et de les ranger par ordre de leur id
public function getBook (){
    $getBook = $this->db->prepare(
        'SELECT `id`, `title`, `releasedate`, `pagenumber`, `editor`, `collection`
        FROM `m3u0l_books`
        ORDER BY `id`
        ');
    $getBook->bindValue(':id', $this->id, PDO::PARAM_INT);
    $getBook->execute();
    return $getBook->fetchAll(PDO::FETCH_OBJ);
}
//Méthode permettant de modifier un livre via son id
public function modifyBook(){
    $modifyBook = $this->db->prepare(
        'UPDATE `m3u0l_books`
        SET `title` = :title,
        `releasedate` = :releasedate,
        `pagenumber` = :pagenumber,
        `editor` = :editor,
        `collection` = :collection
        WHERE `id` = :id
        ');
        $modifyBook->bindValue(':id', $this->id, PDO::PARAM_INT);
        $modifyBook->bindValue(':title', $this->title, PDO::PARAM_STR);
        $modifyBook->bindValue(':releasedate', $this->releasedate, PDO::PARAM_STR);
        $modifyBook->bindValue(':pagenumber', $this->pagenumber, PDO::PARAM_INT);
        $modifyBook->bindValue(':editor', $this->editor, PDO::PARAM_STR);
        $modifyBook->bindValue(':collection', $this->collection, PDO::PARAM_STR);
        $modifyBook->execute();
        return $modifyBook->fetch(PDO::FETCH_OBJ);
}
//Affichage d'un livre via son id 
public function getBookById(){
    $getBookById = $this->db->prepare(
        'SELECT `id`, `title`, `releasedate`, `pagenumber`, `editor`, `collection`
        FROM `m3u0l_books`
        WHERE `id` = :id        
        ');
        $getBookById->bindValue(':id', $this->id, PDO::PARAM_INT);
        $getBookById->execute();
}
//Suppresion d'un livre via son id
public function deleteBook(){
    $deleteBook = $this->db->prepare(
        'DELETE FROM `m3u0l_books`
        WHERE `id` = :id
        ');
        $deleteBook->bindValue(':id', $this->id, PDO::PARAM_INT);
        $deleteBook->execute();
}
}