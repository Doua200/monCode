class Personne {
    nom;
    prenom;
    constructor(pPrenom, pNom) {
        this.prenom = pPrenom;
        this.nom = pNom;
    }
    afficher() {
        return `la personne s'appelle ${this.prenom} ${this.nom}`
    };

}