<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="reponse.php" method="post">
    <select class="salutation" name="salutation">
        <option value="1" selected>Mme</option>
        <option value="2">Mr</option>
    </select>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom"> 
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom"class="form-control" placeholder="Entrez votre prénom">
    <label for="date">Date de naissance:</label> 
    <input type="text" name="date"class="form-control" placeholder="2019"> 
    <label for="identifiant">Identifiant:</label>
    <input type="text" name="identifiant"class="form-control" placeholder="identifiant"> 
    <label for="password">Mot de passe</label>
    <input type="text" name="password"class="form-control" placeholder="mot de passe">
    Sexe:
    <div class="form-check">
        <label for="genre">Sexe:</label>
        <input class="form-check-input" type="radio" name="genre" value="1" id="radio_masculin">
        <label class="form-check-label" for="masculin">
        Masculin
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="genre" id="radio_feminin"  value='2' checked>
        <label class="form-check-label" for="feminin">
         Féminin
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="pnewb" id="choicePhp">
        <label class="form-check-label" for="choicePhp">
        Je debute en PHP
        </label>
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
    
    </form>

      
  

</body>
</html>