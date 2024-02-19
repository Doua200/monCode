<?php
#region CONTROLE DE L APPLICATION
$dir = isset($_GET['dir'])?$_GET['dir']:'.';
$files = scandir($dir);

foreach ($files as $key => $value) {
    if (($value=='.')||($value=='..'))
    unset($files[$key]);
}
$previousDir = dirname($dir);
if ($previousDir =='.')
    $previousLink = 'index.php';
else
    $previousLink= 'index.php?dir='.$previousDir;
#endregion
?>


<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 if ($dir!=".")
     include 'hey-browser/template-nav.php';    
?>
<ul>
<?php 
foreach($files as $key => $value) {
    if(is_dir($dir.'/'.$value)){
        include 'hey-browser/template-dir.php';
    //    echo '<p>D:'.$value.'</p>';
    } else {
        include 'hey-browser/template-file.php';
        // echo '<p>'.$value.'</p>';
    }
}

?> </ul>

</body>
</html>