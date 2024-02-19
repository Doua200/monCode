document.addEventListener('DOMContentLoaded', function () {
    const inputField = document.getElementById('inputField');
    const resultField = document.getElementById('result');
    const btnConvertir = document.getElementById('btn_convertir');

    // Ajoutez un gestionnaire d'événements au bouton "Convertir"
    btnConvertir.addEventListener('click', convertirMonnaie);

    function convertirMonnaie() {
        const montant = parseFloat(inputField.value);
        const monnaieDepart = document.querySelector('.money_depart input:checked').value;
        const monnaieArrivee = document.querySelector('.money_arrive input:checked').value;

        // Supposons des taux de change fixes pour l'exemple
        const tauxDeChange = {
            'dollar': {'euro': 0.85},
            'euro': {'dollar': 1.18}
            // Ajoutez d'autres taux de change selon vos besoins
        };

        try {
            const resultat = montant * tauxDeChange[monnaieDepart][monnaieArrivee];
            resultField.value = `${montant} ${monnaieDepart} équivaut à ${resultat.toFixed(2)} ${monnaieArrivee}`;
        } catch (error) {
            if (error instanceof TypeError) {
                alert("Les codes de monnaie ne sont pas valides.");
            } else {
                alert("Veuillez entrer un montant valide.");
            }
        }
    }

    // Ajoutez des gestionnaires d'événements pour les boutons du clavier
    const boutonsSaisies = document.querySelectorAll('.btn_saisies');
    boutonsSaisies.forEach(btn => {
        btn.addEventListener('click', function () {
            inputField.value += btn.value;
        });
    });
});
