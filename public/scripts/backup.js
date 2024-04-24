/* Carte centrÃ©e sur la Grand'Place de Bruxelles */
const carte = L.map('carte').setView([50.8467139,4.3525151], 16);

/* fond de carte */
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(carte);

// Options pour le fetch() qui va rÃ©cupÃ©rer les donnÃ©es
const fetchOptions = { method:'GET', mode:"cors", cache:'default' };

// Demande de recupÃ©ration des donnÃ©es
fetch('./?loadDatas', fetchOptions)
    // si la promesse est rÃ©solue, c'est-Ã -dire qu'on reÃ§oit les donnÃ©es
    .then(function(response){
        response.json().then(function(data){
            console.log(data);
            afficheMarqueurs(data);
            afficheListe(data);
        });
    })
    // si la promesse est rejetÃ©e, c'est-Ã -dire qu'il y a eu un problÃ¨me
    .catch(function(error){
        console.log('ProblÃ¨mes avec le fetch : '+error.message);
    });



/* Ajout d'un tableau contenant tous les marqueurs pour l'utilisation d'un FeatureGroup */
/* Ceci permet d'adapter l'affichage en fonction de la position des marqueurs */
const lesMarqueurs = [];

/* Ajout d'un marqueur centrÃ© sur le CF2M */
const markerCF2M = L.marker([50.825540,4.338905]);
/* Ajout d'un popup sur le CF2M */
markerCF2M.bindPopup("<h3>CF2M Vous Ãªtes ici !</h3>");

/* ajout du marqueur au tableau */
lesMarqueurs.push(markerCF2M);

function afficheMarqueurs(pointsGeo){
    /* Lire la liste des points du tableau pointsGeo */
    for (let item in pointsGeo) {
        /* dÃ©finition d'un marqueur */
        // Les coordonnÃ©es des points se trouvent dans les champs lat et long (voir dans la DB)
        let unMarqueur = L.marker([pointsGeo[item].latitude,pointsGeo[item].longitude]).addTo(carte);

        /* ajout d'un popup */
        // Il faut regarder dans le fichier JSON (ou dans la DB) oÃ¹ se trouvent les diffÃ©rentes infos
        // le nom du lieu se trouve dans le champ name
        // l'adresse du lieu se trouve dans le champ adresse
        // l'URL de l'image se trouve dans le champ img_url
        unMarqueur.bindPopup(
            `<h3>${pointsGeo[item].title}</h3>
            <p>${pointsGeo[item].ourdesc}</p>
            `);

        /* ajouter aussi ce marqueur au tableau */
        lesMarqueurs.push(unMarqueur);
    }

    /* dÃ©finition du FeatureGroup */
    const groupe = new L.featureGroup(lesMarqueurs);

    /* adaptation des limites de la carte aux positions extrÃªmes des marqueurs */
    carte.fitBounds(groupe.getBounds());
}

/* Cette fonction sert Ã  gÃ©nÃ©rer la liste des points Ã  afficher Ã  cÃ´tÃ© de la carte */
function afficheListe(donnees){
    const liste = document.getElementById('liste');

    // crÃ©ation d'une balise <ul> Ã  placer dans le DIV id=liste */
    const UL = document.createElement("ul");

    // Lire tous les Ã©lÃ©ments du tableau JSON pour crÃ©er les items de la liste
    donnees.forEach(function(item,index){
        // crÃ©er la balise <li> vide
        let LI = document.createElement("li");
        // ajouter son contenu
        LI.innerHTML = `${item.title} | ${item.ourdesc} | `;
        // ajouter des attributs spÃ©cifiques Ã  chaque Ã©lÃ©ment pour pouvoir les distinguer
        LI.setAttribute("lat",`${item.latitude}`);
        LI.setAttribute("lng",`${item.longitude}`);
        LI.setAttribute("id",`${item.idourdatas}`);
        // ajouter un Ã©couteur d'Ã©vÃ©nement pour savoir si on a cliquÃ© sur cet Ã©lÃ©ment
        LI.addEventListener('click', clicItem);
        // la relier Ã  la liste
        UL.appendChild(LI);
    });

    // relier la balise <ul> remplie au DIV id=liste
    liste.appendChild(UL);
}

function clicItem() {
    console.log('Item cliquÃ©');
    let latitude = this.getAttribute('lat');
    let longitude= this.getAttribute('lng');
    let id= this.getAttribute('id');
    console.log(`${latitude} ${longitude}`);

    let marqueur = lesMarqueurs[id];

    carte.flyTo([latitude,longitude],17);

    marqueur.togglePopup();
}
