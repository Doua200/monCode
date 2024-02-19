// let personne = new Personne();
// personne.nom= prompt('Ecrivez votre nom ici');
// personne.prenom= prompt('Ecrivez votre prenom ici');
// console.log(personne);


// let animal = new Animal();
// animal.nom =prompt('Ecrivez le nom animal ici');
// animal.espece=prompt('Ecrire espèce animal ici');
// console.log(animal);

// let vehicule = new Vehicule();
// vehicule.marque =prompt('Ecrivez la marque du vehicule ici');
// vehicule.modele=prompt('Ecrire le modèle du vehicule ici');
// vehicule.nombrePlaces=prompt('Ecrire le nombre de Places');
// console.log(vehicule);

// let maison = new Maison();
// maison.numeroRue =prompt('Quel est le numéro de la rue ?');
// maison.typeVoie =prompt('Quel est le type de voie ?');
// maison.codePostal =prompt('Renseignez le code postal ?');
// maison.ville =prompt('Quelle est la ville ?');
// console.log(maison);


let formateur = new Personne('BRU','Thierry');
let chatFormateur = new Animal ('Arwen','chat');
let vehiculeFormateur = new Vehicule('ninebot','NavBOT G30MAX','1');
let domicileFormateur = new Maison(1,'rue','du paradis','18999','Las Angelos');

console.log(formateur);
console.log(chatFormateur);
console.log(vehiculeFormateur);
console.log(domicileFormateur);

console.log(formateur.afficher())
console.log(chatFormateur.afficher())
console.log(vehiculeFormateur.afficher())
console.log(domicileFormateur.afficher())




