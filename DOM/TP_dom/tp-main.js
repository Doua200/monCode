const body = document.querySelector('.body');
const nav = document.querySelector('nav');
const buttonRandom = document.querySelector('#random');
const buttonH1 = document.querySelector('#btn_h1');
const buttonP = document.querySelector('#btn_p');
 console.log(buttonH1);
 //exercice 1
    buttonRandom.style.backgroundColor='violet';
    buttonRandom.addEventListener('click',changeTextColor);


// exercice 2 (avec la fonction js)
// exercice 3 (function addNewTitre et function addNewParagraph)

buttonP.addEventListener('click',addNewParagraph);

buttonH1.addEventListener('click',addNewTitre);

// exercice 4
const btnMasquer= document.querySelector('#masquer');
const btnReveler= document.querySelector('#reveler');

btnMasquer.addEventListener('click',masquerOuAfficherTousParagraph)
