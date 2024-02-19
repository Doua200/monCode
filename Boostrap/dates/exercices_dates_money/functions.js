function appendToInput(event) {
  console.log(event.target);
  valeurSaisie.value += event.target.value;
  console.log(valeurSaisie.value);
}

function convertirMoney(id, valeur) {
  if (id === "euro") {
      dollar.value = parseFloat(valeur);
  } else if (id === "dollar") {
      euro.value = parseFloat(valeur);
  }
}
let n =valeurSaisie.value;
function afficherResult(n, id) {
  let result = n* parseFloat(id.value);
  console.log(result);
}
