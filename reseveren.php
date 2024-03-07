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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="text" name="" id="reseveren" required>
<input type="text" name="" id="reseveren">
<input type="text" name="" id="reseveren" required>
<input type="email" name="" id="reseveren">
<input type="date" name="" id="reseveren">
input</form>
    <?php include('footer.php');?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    ?>
</body>
</html>