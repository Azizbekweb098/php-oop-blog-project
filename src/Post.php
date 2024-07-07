<?php

class Post{
 public static $pdo;
     public $id;
     public $title;
     public $body;
     public $create_at;

     public static function getAll()
     {
    $stmt = self::$pdo->prepare("SELECT * FROM posts");
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

    return $posts;
     }
}