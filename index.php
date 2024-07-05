<?php
//array of associated array
require "./Blog.php";
$blogs = Blog::all();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about.php">About</a>
    </nav>
    <h1>Blogs Count - <?= Blog::count() ?></h1>
    <?php foreach ($blogs as $blog) : ?>
        <div class="blog">
            <h1>
                <?= $blog["title"] ?>
                <?php if ($blog["title"] === "third blog") : ?>
                    (special blog)
                <?php endif ?>
            </h1>
            <!-- <p><?= $blog["intro"] ?></p> -->
        </div>
    <?php endforeach ?>
</body>

</html>