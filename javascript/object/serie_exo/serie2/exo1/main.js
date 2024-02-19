document.addEventListener('DOMContentLoaded',()=>{
    const btnAddition = document.querySelector('#addition');
    const btnMultiplication = document.querySelector('#multiplication');
    
    btnAddition.addEventListener('click',()=>{
        calcul = new Calcul(5,9);
        console.log(calcul.lanceCalculAdd())
    } )

})
