const map = L.map('map').setView([50.82563, 4.33859], 19);


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 23,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

fetch("../control/mapJSON.php")
    .then(function (response) {
        response.json().then(function (data) {
            console.log(data);
            afficheMarqueurs(data);
            afficheListe(data);
        });
    })
    .catch(function (error) {
        console.log(error.message);
    });

    const hiddenJSON = document.querySelector(".hidden");
    
    console.log(hiddenJSON.textContent);