const btnTape= document.querySelectorAll('#btn_tape');
const value =document.querySelector('nombreTape')

btnTape.forEach(boutton => {
        boutton.addEventListener('click', afficherSuite);
    });