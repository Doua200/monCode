<?php
// $nbActualites = isset($_COOKIE[nbActualités])? $_COOKIE['nbActualites']:10;
// if(isset($_POST)['submit'])
// $nbActualites= $_POST['nbActualites'];
// setcookie('nbActualites', $nbActualites, 'time( + (86400*30), "/");) 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNe
    T87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="cookies.js"defer></script>
</head>
<body>
<div class="general-container d-flex">
    <div class="container-news col-6">
    <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>

 <p>Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant
 une éruption solaire récemment survenue</p>
    </div>
    
    <div class="containter-select col-6">
<h1>Combien d'actualités voulez-vous voir affichées ?</h1>
<form action="affichage">
<select id="selectParagraphs">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>

</form>

    </div>
</div>
<?php

// for ($i = 0; $i < paragraphs.length; $i++) {
//     if ($i < selectedValue) {
//         paragraphs[$i].style.display = 'block';
//     } else {
//         paragraphs[$i].style.display = 'none';
//     }
// }

// });

?>


</body>
</html>