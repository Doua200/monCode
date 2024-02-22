<?php 
$films = ["The Shawshank Redemption" =>"Frank Darabont", "The Godfather"=>"Francis Ford Coppola", "The Dark Knight"=>"Christopher Nolan", "The Lord of the Rings: The Return of the King"=>"Peter Jackson","Pulp Fiction"=>"Quentin Tarantino"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      
    foreach($films as $cle =>$realisateur){?>
         <li><?=$cle?>|<?=$realisateur?></li> 
         <?
    }?>
        </ul>

</body>
</html>