<?php
class comment {
    public $id = 0;
    public $comments = '';
    public $date = '00-00-0000';
    private $db = NULL;
}
public function __construct(){
    try {
        $this->db = new PDO('mysql:host=localhost;port=3308;dbname=aucoindulivre;charset=utf8', 'root', '');
    } catch (Exception $error) {
        die($error->getMessage());
    }
}
public function addComments();
$getid = htmlspecialchars($_GET['id']);
$addComments = $this->db->prepare(
    'SELECT 
    FROM m3u0l_articles
    WHERE id = id ');
