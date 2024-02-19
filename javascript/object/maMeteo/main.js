// 
const relocalize = document.querySelector('#relocalize');
const ville = document.querySelector('#city');
const btn_valider = document.querySelector('#btn_valider');
// abonnement des bouton s sur le click
btn_valider.addEventListener('click', () => {
    getMeteo(ville.value);
});

relocalize.addEventListener('click', () => {
    navigator.geolocation.getCurrentPosition((pos) => {
        console.log(pos);
        localStorage.setItem('positionGPS', JSON.stringify(pos.coords));
        getMeteoGPS(pos.coords);
    });
});
