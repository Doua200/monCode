class Rectangle
{
    largeur;
    longueur;
    constructor(pLargeur, pLongueur) {
        this.largeur = pLargeur;
        this.longueur = pLongueur;
    }
    afficher() {
        return `La surface du rectangle est ${this.largeur * this.longueur}m²`
    };
}