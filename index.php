<?php


require_once 'bootstrab.php';

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

<ul>
    <?php foreach ($pots as $post): ?>
    <li>
  <h4><?=  $post->id . ' ' . $post->title ?></h4>
        <p><?= $post->body ?></p>
        <span><?= $post->create_at ?></span>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>