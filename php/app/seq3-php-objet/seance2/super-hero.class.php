<?php
 class SuperHero
{
public string $nom;
public string $prenom;
public string $pseudonyme;
public DateTime $dateNaissance;


 function calculerAge():int
{
$aujourdhui = date("Y-m-d");
$diff = date_diff($this->dateNaissance, date_create($aujourdhui));
return $diff->format('%y');
}

}
$hero = new SuperHero();
$hero->nom ="Wayne";
$hero-> prenom="Bruce";
$hero->pseudonyme="Batman";
$hero -> dateNaissance = new DateTime("1915-4-7");
echo $hero->pseudonyme." a ".$hero->calculerAge." ans";
?>