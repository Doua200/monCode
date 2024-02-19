const prenom = document.querySelector('#prenom');
const nom = document.querySelector('#nom');
console.log(prenom);
console.log(nom);
afficherNomPrenom()



let citations;
let auteurs;

async function afficherNomPrenom(pIndice) {
  console.log("Afficher le nom et le prénom...");
  const response = await fetch('./quotes/personnadges.json');
  console.log(response);
 
  if (response.ok == true)
  {
        const data = await response.json();
        console.log(data);
        prenom.textContent = data[pIndice].prenom;
        nom.textContent = data[pIndice].nom;
  }
  else
  {
    console.log('erreur ! HAAAAHHHHHHH ! ! ! ');
    console.log(response.statusText);
  }
}

async function afficherCitations(pIndice) {
    console.log("Afficher la citation...");
    const response = await fetch('./quotes/startrek.json');
    console.log(response);

    if (response.ok == true) {
        const data = await response.json();
        console.log(data);
        citations.textContent = data[pIndice].citations;
    }
    else {
        console.log('erreur! pas la bonne referennce!!!')
    }
  
}




document.querySelector('auteurs').addEventListener('click', fetchData);

function fetchData() {
    
    const jsonUrl = './quotes/personnadges.json';

    fetch(jsonUrl)
        .then(response => response.json())
        .then(data => displayData(data))
        .catch(error => console.error('Erreur lors du chargement des données :', error));
}

function displayData(data) {
    const Auteurs = document.querySelector('#auteur');
    Auteurs.innerHTML = '';
       
    };

