const listButtons = document.querySelectorAll('.btn_saisies');
const valeurSaisie = document.querySelector('#inputField');
const euro = document.querySelector('#euro');
const dollar = document.querySelector('#dollar');

listButtons.forEach(boutton => {
    boutton.addEventListener('click', appendToInput);
});

euro.addEventListener("input", convertirMoney("euro", euro.value);
    afficherResult(valeurSaisie.value, euro););

dollar.addEventListener("input", function () {
    convertirMoney("dollar", dollar.value);
    afficherResult(valeurSaisie.value, dollar);
});

let convertir = document.querySelector('#btn_convertir');
convertir.addEventListener("click",convertirMoney());
    
let result = document.querySelector('#result');
result.addEventListener("click",afficherResult());







