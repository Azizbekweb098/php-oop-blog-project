<?php
require_once 'config\auto-load.php';


$connection =  new Database('127.0.0.1', 'ii', 'root', '');
$pdo = $connection->connect();

Post::$pdo = $pdo;