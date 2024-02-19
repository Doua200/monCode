class Vehicule
{
    marque;
    modele;
    nombrePlaces;
    constructor (pMarque, pModele, pNombrePlaces)
    {
this.marque =pMarque;
this.modele = pModele;
this.nombrePlaces = pNombrePlaces;
    }
    afficher() {
        return `le véhicule est de la marque  ${this.marque} et ${this.modele}. Il peut transporter 
        ${this.nombrePlaces} personne(s) ` 
    };
}

   

