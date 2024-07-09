<?php

require 'config\bootstrab.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $body = $_POST['body'];

    $result = Post::create($title, $body);
    if($result == 1){
        header("Location: index.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-post</title>
</head>
<body>
  <form method="POST" action=""">
   <H5>Creta-post</H5>
    <input type="text" name="title" >
    <textarea name="body"  cols="30" rows="10"></textarea>
  <button type="submit">Yuborish</button>
  </form>
</body>
</html>