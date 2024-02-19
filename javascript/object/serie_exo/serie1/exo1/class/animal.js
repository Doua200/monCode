class Animal {
    nom;
    espece;
    constructor(pNom, pEspece) {
        this.nom = pNom;
        this.espece = pEspece;
    }
    afficher() {
        return `l'animal' s'appelle ${this.nom} et est de l'espèce ${this.espece}`
    };
}