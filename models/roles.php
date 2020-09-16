<?php
class role {
    public $id = 0;
    public $name = '';
    private $db = NULL;
    private $table = 'm3u0l_usersroles';
public function __construct(){
    try {
        $this->db = new PDO('mysql:host='. SQL_HOST . ';port=3308;dbname='. SQL_DBNAME .';charset=utf8', SQL_USER , SQL_PWD);
    } catch (Exception $error) {
        die($error->getMessage());
    }
}
//Méthode permettant d'afficher des roles utilisateur
public function getRole(){
    $getRole = $this->db->prepare(
        'SELECT `id`, `name`,
        FROM `m3u0l_usersroles`
        ');
    $getRole->bindValue(':id', $this->id, PDO::PARAM_INT);
    $getRole->execute();
    return $getRole->fetch(PDO::FETCH_OBJ);
}
}