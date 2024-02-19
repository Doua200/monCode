function estClasseCroissante(tableau) {
    for (let i = 0; i < tableau.length - 1; i++) {
        if (tableau[i] > tableau[i + 1]) {
            return false;
        }
    }
    return true;
}

const tableauClasse = [1, 2, 3, 4, 5];
console.log(estClasseCroissante(tableauClasse));

const tableauDesordre = [5, 3, 8, 2, 7];
console.log(estClasseCroissante(tableauDesordre));
