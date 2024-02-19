class Calcul
{
    premierNombre;
    deuxiemeNombre;
    constructor(pPremierNombre, pDeuxiemeNombre) {
        this.premierNombre = pPremierNombre;
        this.deuxiemeNombre = pDeuxiemeNombre;
    }
    lanceCalculAdd(){
            console.log('lanceCalculAdd');
            return this.premierNombre+this.deuxiemeNombre
    }
    lanceCalculMultiplication(){

    }
}