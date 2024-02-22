<?php 
$tableauFilms = ["The Shawshank Redemption", "the Godfather", "The Dark Knight", "The Lord of the Rings: The Return of the King","Pulp Fiction"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        foreach($tableauFilms as $key=>$titre){?>
    <li><?=$key?>|<?=$titre?></li>
    <?php
} ?>
</ul>
</body>
</html>