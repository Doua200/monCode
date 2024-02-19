class Cercle
{
    rayon;
   
        constructor(pRayon) {
        this.rayon = pRayon;
           
    
    }
    afficher() {
        return `La surface du cercle est ${Math.pow(this.rayon,2)*Math.PI}m²`
    };
}