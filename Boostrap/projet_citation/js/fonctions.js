async function afficherNomPrenom(pIndice){
    const response = await fetch("quotes/zombies.json");
    const data = await response.json();
    if(response.ok){
        prenom.textContent = data[pIndice].prenom;
        nom.textContent = data[pIndice].nom;
        }
        else {
            prenom.textContent = "Enfer et damnation, une erreur!";
            console.log(data);
        }
}

async function afficherCitations(pIndice){
    const response = await fetch("quotes/startrek.json");
    const data = await response.json();
    if(response.ok){
        citations.textContent = data[pIndice].citations;
               }
        else {
            citations.textContent = "Enfer et damnation, une erreur!";
            console.log(data);
        }
}

