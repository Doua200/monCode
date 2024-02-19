function changeTextColor (event){
    // if(ra)
    console.log(event);
    console.log(document.body.style.backgroundColor.replaceAll(' ',''));
    if(document.body.style.backgroundColor.replaceAll(' ','')=='rgb(0,0,0)')
    document.body.style.backgroundColor='rgb(255,255,255)';
else
document.body.style.backgroundColor='rgb(0,0,0)';
}



function addNewTitre (event){
    const newTitre = document.createElement('h1');
    newTitre.textContent= prompt('mon titre');
    body.appendChild(newTitre);
}

function addNewParagraph(event){
    const listeTitre = document.querySelectorAll('h1');
    console.log(listeTitre);
    const newPragraph = document.createElement('p');
newPragraph.textContent= prompt('mon paragraphe');
listeTitre[listeTitre.length-1].appendChild(newPragraph);
}


function masquerOuAfficherTousParagraph() {
    const paragraphes = document.querySelectorAll('p');

    paragraphes.forEach(function(paragraphe) {
        if (paragraphe.style.display === 'none' || paragraphe.style.display === '') {
            paragraphe.style.display = 'block';
        } else {
            paragraphe.style.display = 'none';
        }
    });
}

// Supposons que vous vouliez déclencher la fonction lors d'un événement de clic sur un bouton, vous devriez ajouter un écouteur d'événements comme ceci :
var bouton = document.getElementById('votreIdDeBouton'); // Remplacez 'votreIdDeBouton' par l'ID réel de votre bouton
bouton.addEventListener('click', masquerOuAfficherTousParagraphes);
