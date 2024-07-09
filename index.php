<?php


require_once 'config\bootstrab.php';

$pots = Post::getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
</head>
<body>
<h1>oop</h1>
<a href="create-post.php"><h1>Create-Post</h1></a>

<ul>
    <?php foreach ($pots as $post): ?>
    <li>
  <a href="post.php?id=<?= $post->id ?>"><h4><?=  $post->id . ' ' . $post->title ?></h4></a>
        <p><?= $post->body ?></p>
        <span><?= $post->create_at ?></span>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>