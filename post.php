<?php

require 'bootstrab.php';
$post_id = $_GET['id'];

$post = Post::getById($post_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post <?= $post_id ?></title>
</head>
<body>
<div>
    <h1>
        <?= $post->id. '_' . $post->title ?>
    </h1>
    <p><?= $post->body ?><br></p>
    <small><?= $post->create_at ?></small>
</div>
</body>
</html>
