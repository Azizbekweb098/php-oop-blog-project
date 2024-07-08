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
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
    $stmt->execute();
    $posts = $stmt->fetchAll();

    return $posts;
     }
     public static function getById($id)
     {
         $stmt = self::$pdo->prepare("SELECT * FROM posts WHERE id = ?");
         $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
         $stmt->execute([$id]);
         $posts = $stmt->fetch();

         return $posts;
     }
}