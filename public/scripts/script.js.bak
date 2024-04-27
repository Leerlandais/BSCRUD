const timeToGo = document.getElementById("timeToGo");
const sayBye = document.getElementById("sayBye");

const body = document.querySelector("body");

const getColour = document.querySelectorAll(".dropdown-item");

for (let i = 0; i < getColour.length; i++) {
    
    getColour[i].addEventListener("click", changeColour);
}

function changeColour() {
    body.className = "";    
    const colourPick = this.id
    console.log(colourPick);
    body.classList.add(colourPick);
    sessionStorage.setItem("colour", colourPick);

}

function applyColour () {
    let colourPick = sessionStorage.getItem("colour");
    body.className = "";  
    body.classList.add(colourPick);
}

applyColour();
/*

sayBye.addEventListener("click", function (event) {
    event.preventDefault();
    
    timeToGo.classList.add("animate__animated", "animate__fadeOut");

});

*/

