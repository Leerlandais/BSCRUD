const URL_SearchParams = new URLSearchParams(window.location.search);
    flyLat = URL_SearchParams.get("lat");
    flyLon = URL_SearchParams.get("lon");

const map       = L.map('map').setView([50.82563, 4.33859], 19);
const mapLink   = document.querySelectorAll('.mapLink');

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 23,
    attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
/*              REFUSES TO FUNCTION PROPERLY
fetch("../control/mapJSON.php")
    .then(function (response) {
        response.json().then(function (data) {
            console.log(data);
            placeMarkers(data);
            affichemarker(data);
        });
    })
    .catch(function (error) {
        console.log(error.message);
    });

    const hiddenJSON = document.querySelector(".hidden");
    
    console.log(hiddenJSON.textContent);
    */
    map.flyTo([flyLat, flyLon], 19, {
        animate: true,
        duration: 3 // in seconds
      });

    
const markerTable = [];
    for (x of mapLink) {

        let href = x.getAttribute("href");
        let params = href.split('&');
        let lat, lon, nom, id;
            params.forEach(function(param) {
                let splitParam = param.split('=');
                    if (splitParam[0] === 'lat') {
                        lat = splitParam[1];
                    }else if (splitParam[0] === 'lon') {
                        lon = splitParam[1];
                    }else if (splitParam[0] === 'nom') {
                        nom = splitParam[1];
                    }else if (splitParam[0] === 'id') {
                        id = splitParam[1];
                    }
            });


        markerTable.push({"lat":lat,"lon":lon,"nom":nom,"id":id});
    }


    placeMarkers(markerTable);

function placeMarkers(marker){
    for (let item in marker){
        let thisMarker = L.marker([marker[item].lat, marker[item].lon]).addTo(map);
        thisMarker.bindPopup(`<h4>${marker[item].nom}</h4>`);
        markerTable.push(thisMarker);
    }


}