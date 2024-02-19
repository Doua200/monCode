function saluer(event)
{
    event.preventDefault();
    // alert("AH UN CLICK SUR LE BOUTON !");
    let prenom = document.querySelector('#prenom').value;
    let nom = document.querySelector('#nom').value;
    let message = `Bonjour ${prenom} ${nom}`;
    alert(message);
}



