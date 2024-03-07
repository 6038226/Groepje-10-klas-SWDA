<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="sushi.css?t=<?php echo round(microtime(true)*1000);?>">
    <script src="sushi.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amethysta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredericka+the+Great">
</head>
<body>
    <?php include('header.php');?>
<main>
    <section id="informatie">
    <article class="informatie1"></article>
    <article class="informatie2"></article>
    </section>
    <section id="show">
        <article class="slideshow"><p><img src="#" alt="slideshow" class="slide"></p></article>
    </section>
    <section id="info">
        <article class="informatie3"></article>
    <article class="informatie4"></article>
    </section>
</main>
    <?php include('footer.php');?>
</body>
</html>