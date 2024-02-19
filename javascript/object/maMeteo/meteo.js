function getMeteo(pVille = "paris", pUnite = 'metric', pLangue = "fr") {
    let params = {
        appid: '44dea7690cbedbf22c487eda2dba82fc',
        q: pVille,
        units: pUnite,
        lang: pLangue
    }
    console.log('getMeteo');
    getMeteoFromAPI(params);
}
function getMeteoGPS(pPos, pUnite = 'metric', pLangue = "fr") {
    console.log(pPos);
    let params = {
        appid: '44dea7690cbedbf22c487eda2dba82fc',
        // q: pPos,
        lat:pPos.latitude,
        lon:pPos.longitude,
        units: pUnite,
        lang: pLangue
    }
    getMeteoFromAPI(params);
}

function getMeteoSuccess(data) {
    console.log('getMeteo:success');
    console.log(data);
    $('p').html(JSON.stringify(data))
    var img = $('<img id="dynamic">'); //Equivalent: $(document.createElement('img'))
    img.attr('src', 'https://openweathermap.org/img/w/' + data.weather[0].icon + '.png');
    img.appendTo('#imagediv');
}

function getMeteoFromAPI(params) {
    $.ajax({
        url: 'https://api.openweathermap.org/data/2.5/weather',
        type: 'GET',
        dataType: 'json',
        data: params,
        success: getMeteoSuccess,
        error: function (xhr, status, error) {
            console.error("Erreur lors de la requête:", error);
            $('p').html(JSON.stringify(status));
        }
    });
}



